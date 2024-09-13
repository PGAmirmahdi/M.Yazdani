<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Example;
use App\Models\Favorite;
use App\Models\JobHistory;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Morilog\Jalali\Jalalian;
use Symfony\Component\HttpFoundation\Response;
use function React\Promise\all;

class LandingController extends Controller
{

    public function index()
    {
        $user = User::where('name', 'محدثه')->first(['name', 'family', 'phone', 'role_id', 'profile','id']);
        $resume = Resume::where('user_id', $user->id)->get();
        $example = Example::where('user_id', $user->id)->get();
        $customer = Customer::all();
        $favorites = Favorite::where('user_id', $user->id)->get();
        $skills = Skill::where('user_id', $user->id)->get();
        $jobHistories = JobHistory::all();
        $totalDaysWorked = 0;

        foreach ($jobHistories as $jobHistory) {
            $fromDate = Carbon::parse(Jalalian::fromFormat('Y/m/d', $jobHistory->from_date)->toCarbon())->startOfDay();
            $toDate = $jobHistory->to_date === 'تا اکنون' ? Carbon::now() : Carbon::parse(Jalalian::fromFormat('Y/m/d', $jobHistory->to_date)->toCarbon())->endOfDay();

            $diffInDays = $toDate->diffInDays($fromDate);
            $totalDaysWorked += $diffInDays;
        }
        return view('landing', compact('user', 'resume', 'example', 'customer','totalDaysWorked','skills','jobHistories','favorites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showFile($filename)
    {
        // بررسی وجود فایل در دیسک public
        if (Storage::disk('public')->exists('profile/' . $filename)) {
            // دریافت فایل و ارسال آن به مرورگر
            $filePath = 'profile/' . $filename;
            return response()->file(Storage::disk('public')->path($filePath));
        } else {
            // فایل پیدا نشد
            abort(Response::HTTP_NOT_FOUND, 'فایل پیدا نشد');
        }
    }

    public function resumeFile($filename)
    {
        // بررسی وجود فایل در دیسک public
        if (Storage::disk('public')->exists('resumes/' . $filename)) {
            // دریافت فایل و ارسال آن به مرورگر
            $filePath = 'resumes/' . $filename;
            return response()->file(Storage::disk('public')->path($filePath));
        } else {
            // فایل پیدا نشد
            abort(Response::HTTP_NOT_FOUND, 'فایل پیدا نشد');
        }
    }

    public function exampleFile($filename)
    {
        if (Storage::disk('public')->exists('examples/' . $filename)) {
            // دریافت فایل و ارسال آن به مرورگر
            $filePath = 'examples/' . $filename;
            return response()->file(Storage::disk('public')->path($filePath));
        } else {
            // فایل پیدا نشد
            abort(Response::HTTP_NOT_FOUND, 'فایل پیدا نشد');
        }
    }
    public function skillFile($filename){
        // بررسی وجود فایل در دیسک public
        if (Storage::disk('public')->exists('skills/' . $filename)) {
            // دریافت فایل و ارسال آن به مرورگر
            $filePath = 'skills/' . $filename;
            return response()->file(Storage::disk('public')->path($filePath));
        } else {
            // فایل پیدا نشد
            abort(Response::HTTP_NOT_FOUND, 'فایل پیدا نشد');
        }
    }
    public function favoriteFile($filename){
        // بررسی وجود فایل در دیسک public
        if (Storage::disk('public')->exists('favorites/' . $filename)) {
            // دریافت فایل و ارسال آن به مرورگر
            $filePath = 'favorites/' . $filename;
            return response()->file(Storage::disk('public')->path($filePath));
        } else {
            // فایل پیدا نشد
            abort(Response::HTTP_NOT_FOUND, 'فایل پیدا نشد');
        }
    }
    public function userFile($filename){
        // بررسی وجود فایل در دیسک public
        if (Storage::disk('public')->exists('profile/' . $filename)) {
            // دریافت فایل و ارسال آن به مرورگر
            $filePath = 'profile/' . $filename;
            return response()->file(Storage::disk('public')->path($filePath));
        } else {
            // فایل پیدا نشد
            abort(Response::HTTP_NOT_FOUND, 'فایل پیدا نشد');
        }
    }
}
