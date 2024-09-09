@extends('panel.layouts.master')
@section('title', 'لیست تماس‌ها')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between align-items-center">
                <h6>لیست تماس‌ها</h6>
                @can('calls-create')
                    <a href="{{ route('calls.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus mr-2"></i>
                        ایجاد تماس جدید
                    </a>
                @endcan
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered dataTable dtr-inline text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>ایمیل</th>
                        <th>شماره تماس</th>
                        <th>تاریخ ایجاد</th>
                        <th>مشاهده</th>
                        @can('calls-edit')
                            <th>ویرایش</th>
                        @endcan
                        @can('calls-delete')
                            <th>حذف</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($calls as $key => $call)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $call->name }}</td>
                            <td>{{ $call->family }}</td>
                            <td>{{ $call->email }}</td>
                            <td>{{ $call->number }}</td>
                            <td>{{ verta($call->created_at)->format('H:i - Y/m/d') }}</td>
                            <td>
                                <a class="btn btn-info btn-floating" href="{{ route('panel.calls.show', $invoice->id) }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                            @can('calls-edit')
                                <td>
                                    <a class="btn btn-warning btn-floating" href="{{ route('panel.calls.edit', $call->id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            @endcan
                            @can('calls-delete')
                                <td>
                                    <button class="btn btn-danger btn-floating trashRow" data-url="{{ route('panel.calls.destroy',$call->id) }}" data-id="{{ $call->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="d-flex justify-content-center">{{ $calls->links() }}</div>
        </div>
    </div>
@endsection
