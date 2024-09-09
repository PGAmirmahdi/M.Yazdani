@extends('panel.layouts.master')
@section('title', 'جزئیات تماس')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">جزئیات تماس</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h6>نام</h6>
                    <p>{{ $call->name }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h6>نام خانوادگی</h6>
                    <p>{{ $call->family }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h6>ایمیل</h6>
                    <p>{{ $call->email }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h6>شماره تماس</h6>
                    <p>{{ $call->number }}</p>
                </div>
                <div class="col-12 mb-3">
                    <h6>توضیحات</h6>
                    <p>{{ $call->description }}</p>
                </div>
                <div class="col-12 mb-3">
                    <h6>تاریخ ایجاد</h6>
                    <p>{{ verta($call->created_at)->format('H:i - Y/m/d') }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
            @can('calls-edit')
                <a href="{{ route('panel.calls.edit', $call->id) }}" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                    ویرایش تماس
                </a>
            @endcan
            @can('calls-delete')
                <form action="{{ route('panel.calls.destroy', $call->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('آیا مطمئن هستید؟')">
                        <i class="fa fa-trash"></i>
                        حذف تماس
                    </button>
                </form>
            @endcan
        </div>
    </div>
@endsection
