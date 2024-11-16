@php use Illuminate\Support\Str; @endphp
@extends('panel.layouts.master')
@section('title', 'نمونه کارها')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between align-items-center">
                <h6>نمونه کارها</h6>
                <div>
                    @can('create-example')
                        <a href="{{ route('example.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus mr-2"></i>
                            ایجاد نمونه کار
                        </a>
                    @endcan
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable dtr-inline text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>فایل</th>
                        <th>عنوان</th>
                        <th>توضیحات</th>
                        <th>ویژگی‌ها</th>
                        <th>زمان آپلود</th>
                        <th>به اشتراک‌ گذاری</th>
                        <th>مشاهده</th>
                        @can('edit-example')
                            <th>ویرایش</th>
                        @endcan
                        @can('delete-example')
                            <th>حذف</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @if($examples && $examples->isNotEmpty())
                        @foreach($examples as $key => $example)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>
                                    @if($example->file)
                                        @php
                                            $fileExtension = pathinfo($example->file, PATHINFO_EXTENSION);
                                        @endphp

                                        @if(in_array($fileExtension, ['mp4', 'avi', 'mov']))
                                            {{-- بررسی فرمت‌های ویدیو --}}
                                            <a href="#"
                                               data-size="1920x1080"
                                               data-type="video"
                                               data-video-url="{{ route('exa.file.show', ['filename' => basename($example->file)]) }}">
                                                <video height="240px" muted playsinline loop width="240px" autoplay style="border-radius:15px;">
                                                    <source src="{{ route('exa.file.show', ['filename' => basename($example->file)]) }}" type="video/{{ $fileExtension }}" style="border-radius:15px;">
                                                    مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
                                                </video>
                                            </a>
                                        @else
                                            <a href="{{ route('exa.file.show', ['filename' => basename($example->file)]) }}"
                                               data-image="{{ route('exa.file.show', ['filename' => basename($example->file)]) }}"
                                               class="gallery__link"
                                               itemprop="contentUrl" data-size="1400x1400" data-type="image">
                                                <img
                                                    src="{{ route('exa.file.show', ['filename' => basename($example->file)]) }}"
                                                    class="gallery__image"
                                                    itemprop="thumbnail" alt="توضیحات تصویر">
                                            </a>
                                        @endif
                                    @else
                                        <span class="text-muted">فایل ندارد</span>
                                    @endif
                                </td>
                                <td>{{ $example->title }}</td>
                                <td>{{ Str::limit($example->description, 60) }}</td>
                                <td>
                                    @php
                                        $properties = json_decode($example->properties, true);
                                    @endphp
                                    @foreach($properties as $property)
                                        <div>+ {{ $property }} <br></div>
                                    @endforeach
                                </td>
                                <td>{{ verta($example->created_at)->format('H:i - Y/m/d') }}</td>
                                <td>
                                    <button class="btn btn-primary btn-floating share-button"
                                            data-link="{{ route('example.download', $example->id) }}"
                                            data-toggle="modal" data-target="#shareModal">
                                        <i class="ti-link"></i>
                                    </button>
                                </td>
                                <td>
                                    <a class="btn btn-info btn-floating" href="{{ route('example.show', $example->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                @can('edit-example')
                                    <td>
                                        <a class="btn btn-warning btn-floating" href="{{ route('example.edit', $example->id) }}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                @endcan
                                @can('delete-example')
                                    <td>
                                        <button class="btn btn-danger btn-floating trashRow"
                                                data-url="{{ route('example.destroy', $example->id) }}"
                                                data-id="{{ $example->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">{{ $examples->appends(request()->all())->links() }}</div>
        </div>
    </div>

    <!-- مدال اشتراک‌گذاری -->
    <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">لینک اشتراک‌ گذاری فایل</h5>
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

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>
    <script>
        $(document).on('click', '.share-button', function () {
            var downloadLink = $(this).data('link');
            $('#shareLink').val(downloadLink);
        });

        $('#copyLinkButton').on('click', function () {
            var shareLink = document.getElementById('shareLink');
            shareLink.select();
            document.execCommand("copy");
            alert("لینک کپی شد: " + shareLink.value);
        });
    </script>
@endsection
