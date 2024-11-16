@extends('panel.layouts.master')

@section('content')
    <div class="w-100 h-100 mt-5">
        <h1 class="text-center mb-4">
            {{ isset($folder) ? 'مسیر: ' . getFilePath($folder) : 'مدیریت فایل' }}
        </h1>

        <!-- نمایش پیام‌های موفقیت و خطا -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <!-- مدال اشتراک‌گذاری -->
        <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="shareModalLabel">لینک اشتراک‌گذاری فایل</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" id="shareLink" class="form-control" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                        <button type="button" class="btn btn-primary" id="copyLinkButton">کپی لینک</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- مدال ساخت فولدر -->
        <div class="modal fade" id="createFolderModal" tabindex="-1" role="dialog"
             aria-labelledby="createFolderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createFolderModalLabel">ساخت فولدر جدید</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('files.createFolder') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <input type="text" name="folder_name" class="form-control" placeholder="نام پوشه" required>
                            @if(isset($folder))
                                <input type="hidden" name="parent_folder_id" id="parent_folder_id" value="{{ $folder->id }}">
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                            <button type="submit" class="btn btn-primary">ایجاد</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- مدال آپلود فایل -->
        <div class="modal fade" id="uploadFileModal" tabindex="-1" role="dialog" aria-labelledby="uploadFileModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadFileModalLabel">آپلود فایل جدید</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="file-upload-form">
                        @csrf
                        <div id="file-dropzone" class="dropzone"></div>
                        @if(isset($folder))
                            <input type="hidden" name="parent_folder_id" value="{{ $folder->id }}">
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <!-- لیست فایل‌ها و فولدرها -->
        @can('folder-list')
            <div class="card p-3">
                <h5 class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <!-- فرم جستجو و مرتب‌سازی -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#searchModal">
                            <i class="ti-search"></i>
                        </button>

                    </div>
                    <div>
                        @can('upload-file')
                            <button class="btn btn-success" data-toggle="modal" data-target="#uploadFileModal">
                                <i class="ti-plus"></i>
                            </button>
                        @endcan
                        @can('create-folder')
                            <button class="btn btn-success" data-toggle="modal" data-target="#createFolderModal">
                                <i class="fa-solid fa-folder-plus"></i>
                            </button>
                        @endcan
                        @if(isset($folder) && $folder->parent_folder_id)
                            <a href="{{ route('files.showFolder', $folder->parent_folder_id) }}" class="btn btn-danger"><i
                                    class="ti-angle-left"></i></a>
                        @endif
                    </div>
                </h5>
                <!-- مدال جستجو -->
                <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="searchModalLabel">جستجو در همین مسیر</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="GET" action="{{ url()->current() }}">
                                <div class="modal-body">
                                    <input type="text" name="search" class="form-control" placeholder="جستجو..." value="{{ request('search') }}" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    <button type="submit" class="btn btn-primary">جستجو</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="list-group">
                    @foreach($files as $file)
                        <li class="list-group-item d-flex justify-content-between align-items-center file">
                            <div>
                                @if($file->file_type == 'folder')
                                    <a href="{{ route('files.showFolder', $file->id) }}" class="open-folder-link"
                                       style="text-decoration: none; color: inherit;">
                                        📁 <strong>{{ $file->file_name }}</strong>
                                    </a>
                                @else
                                    @php
                                        // تنظیم آیکون بر اساس نوع فایل
                                        $iconClass = '';
                                        if ($file->file_type == 'application/pdf') {
                                            $iconClass = 'fas fa-file-pdf text-danger';
                                        } elseif (in_array($file->file_type, ['image/jpeg', 'image/png', 'image/gif'])) {
                                            $iconClass = 'fas fa-file-image text-success';
                                        } elseif (in_array($file->file_type, ['video/mp4', 'video/x-msvideo'])) {
                                            $iconClass = 'fas fa-file-video text-warning';
                                        } elseif ($file->file_type == 'application/zip') {
                                            $iconClass = 'fas fa-file-archive text-info';
                                        } elseif (in_array($file->file_type, ['application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])) {
                                            // برای فایل‌های Word
                                            $iconClass = 'fas fa-file-word text-primary';
                                        } elseif (in_array($file->file_type, ['application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'])) {
                                            // برای فایل‌های Excel
                                            $iconClass = 'fas fa-file-excel text-success';
                                        } elseif (in_array($file->file_type, ['application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'])) {
                                            // برای فایل‌های PowerPoint
                                            $iconClass = 'fas fa-file-powerpoint text-warning';
                                        } else {
                                            $iconClass = 'fas fa-file text-secondary';
                                        }
                                    @endphp

                                    <i class="{{ $iconClass }}"></i>
                                    <strong>{{ $file->file_name }}</strong> -
                                    <small class="text-muted">ارسال شده توسط: {{ $file->user->role->label . ' ' . $file->user->name }} | تاریخ
                                        بارگذاری: {{ verta($file->created_at)->format('Y/m/d') }}</small>
                                @endif
                            </div>
                            <div>
                                @if($file->file_type != 'folder')
                                    <a href="{{ route('files.download', $file->id) }}" class="btn btn-sm btn-primary"><i
                                            class="fa-solid fa-download"></i></a>
                                    @can('share-file')
                                        <button class="btn btn-sm btn-info share-button"
                                                data-link="{{ route('files.download', $file->id) }}"
                                                data-toggle="modal" data-target="#shareModal">
                                            <i class="ti-link"></i>
                                        </button>
                                    @endcan
                                @endif
                                @can('delete-file')
                                    <form action="{{ route('files.destroy', $file->id) }}" method="POST"
                                          style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                @endcan
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endcan
    </div>

    @php
        function getFilePath($file) {
            $path = [];
            while ($file) {
                $path[] = $file->file_name; // نام فایل یا پوشه را به مسیر اضافه می‌کنیم
                $file = $file->parentFolder; // به پوشه والد بروید
            }
            return implode(' / ', array_reverse($path)); // مسیر را به صورت معکوس نمایش دهید
        }
    @endphp
        <!-- استایل‌ها -->
    <style>
        .invalid-feedback {
            color: red;
        }

        .dropzone {
            border: 2px dashed #007bff;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('click', '.share-button', function () {
            var downloadLink = $(this).data('link');
            console.log("Download link: " + downloadLink); // بررسی لینک
            $('#shareLink').val(downloadLink);
        });

        $('#copyLinkButton').on('click', function () {
            var shareLink = document.getElementById('shareLink');
            shareLink.select();
            document.execCommand("copy");
            alert("لینک کپی شد: " + shareLink.value);
        });
        Dropzone.autoDiscover = false;

        // تنظیمات Dropzone برای آپلود فایل
        let fileDropzone = new Dropzone("#file-dropzone", {
            url: "{{ route('files.store') }}", // آدرس آپلود فایل
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            autoProcessQueue: true, // جلوگیری از پردازش خودکار فایل‌ها
            maxFiles: 1,
            dictDefaultMessage: "فایل را اینجا بکشید یا کلیک کنید",
            addRemoveLinks: true,
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    // افزودن parent_folder_id به فرم‌دیتا
                    let parentFolderId = document.querySelector('#parent_folder_id').value; // شناسه فولدر والد را از DOM دریافت کنید
                    formData.append("parent_folder_id", parentFolderId);
                });
            }
        });

        // آپلود فایل پس از کلیک بر روی دکمه
        $('#upload-btn').on('click', function() {
            fileDropzone.processQueue();
        });

        // رویداد موفقیت‌آمیز آپلود فایل
        fileDropzone.on("success", function(file, response) {
            console.log("File uploaded successfully");
            window.location.reload(); // بارگذاری مجدد صفحه پس از آپلود موفقیت‌آمیز
        });

        // مدیریت خطاهای آپلود فایل
        fileDropzone.on("error", function(file, response) {
            console.error("Upload failed:", response);
        });
    </script>
@endsection
