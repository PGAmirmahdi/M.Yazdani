<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExampleRequest;
use App\Models\Example;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ExampleController extends Controller
{
    public function index()
    {
        $examples = Example::where('user_id', auth()->id())->orderbyDesc('id')->paginate(3);
        return view('panel.example.index', compact('examples'));
    }

    public function create()
    {
        return view('panel.example.create');
    }

    public function store(StoreExampleRequest $request)
    {

        // ایجاد رکورد جدید نمونه کار
        $example = new Example([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'properties' => json_encode($request->input('properties')), // تبدیل ویژگی‌ها به JSON
            'user_id' => auth()->id(),
        ]);

        // بررسی وجود فایل و ذخیره آن
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('examples', 'public');
            $example->file = $filePath;
        }

        $example->save();

        // نمایش پیام موفقیت
        alert()->success('نمونه کار با موفقیت اضافه شد');

        return redirect()->route('example.index');
    }

    public function show(Example $example)
    {
        return view('panel.example.show', compact('example'));
    }

    public function edit($id)
    {
        // پیدا کردن نمونه کار با آی‌دی مشخص شده
        $example = Example::findOrFail($id);

        // تبدیل ویژگی‌ها از JSON به آرایه
        $example->properties = json_decode($example->properties, true);

        // بازگرداندن ویو و پاس کردن داده‌های نمونه کار به آن
        return view('panel.example.edit', compact('example'));
    }

    public function update(StoreExampleRequest $request, $id)
    {
        // پیدا کردن نمونه کار با آی‌دی مشخص شده
        $example = Example::findOrFail($id);

        // به روز رسانی ویژگی‌های نمونه کار
        $example->title = $request->input('title');
        $example->description = $request->input('description');
        $example->properties = json_encode($request->input('properties')); // تبدیل ویژگی‌ها به JSON
        $example->user_id = auth()->id();

        // بررسی وجود فایل جدید و ذخیره آن
        if ($request->hasFile('file')) {
            // حذف فایل قدیمی
            if ($example->file) {
                Storage::disk('public')->delete($example->file);
            }

            // ذخیره فایل جدید
            $filePath = $request->file('file')->store('examples', 'public');
            $example->file = $filePath;
        }

        $example->save();

        // نمایش پیام موفقیت
        alert()->success('نمونه کار با موفقیت ویرایش شد');

        return redirect()->route('example.index');
    }

    public function destroy(Example $example)
    {
        $example->delete();
        return back();
    }
    public function download($id)
    {
        // پیدا کردن نمونه کار با آی‌دی مشخص شده
        $example = Example::findOrFail($id);

        // بررسی وجود فایل
        if ($example->file) {
            return Storage::disk('public')->download($example->file);
        }

        return redirect()->back()->with('error', 'فایل پیدا نشد.');
    }

    public function ShareLink($id)
    {
        $example = Example::findOrFail($id);
        $shareLink = route('example.download', $example->id); // لینک مستقیم دانلود فایل

        return response()->json(['link' => $shareLink]);
    }
}
