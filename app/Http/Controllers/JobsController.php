<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobCreationRequest;
use App\Models\CompanyAuth;
use App\Models\Job;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\FunctionController;
class JobsController extends Controller
{
    public function __construct()
    {

        $this->middleware('checkjob',['except'=>['show','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with('company_auth')->orderBy('created_at','desc')->paginate(10);
        return view('jobs.index',[
            'jobs'=>$jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobCreationRequest $request)
    {
        $request->validated();

        $filetype = $request->file->extension();

       $newFileName =  FunctionController::checkfileextandmove($filetype,$request);

        $id = session()->get('details.companyId');
        $company = CompanyAuth::find($id);
                $job =    Job::create([
                    'company_auth_id'=>$company->id,
                    'title'=> $request->title,
                    'description'=> $request->description,
                    'type' => $request->type,
                    'category' => $request->category,
                    'avaliability' => $request->avaliability,
                    'experiencelevel' => $request->experiencelevel,
                    'salarymin' => $request->salarymin,
                    'salarymax' => $request->salarymax,
                    'location' => $request->location,
                    'languages' => $request->languages,
                    'skills'  => $request->skills,
                    'file_path' => $newFileName
                ]);
        if ($job){
            Session::flash('success','Job posted successfully');
            return back();
        }else {
            Session::flash('fail','Something went wrong');
            return back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Job::find($id)->first();
        return view('jobs.show')->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Job::find($id)->first();
        return view('jobs.edit')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobCreationRequest $request, $id)
    {
        $request->validated();

        $filetype = $request->file->extension();

        $newFileName = time().'-'.$request->title.'.'.$request->file->extension();

        if ($filetype == ('jpg' || 'png' || 'jpeg')){
            $request->file->move(public_path('images/homepage/latest-jobs'),$newFileName);
        }else if($filetype == 'docx'){
            $request->file->move(public_path('images/homepage/latest-jobs'),$newFileName);
        }else{
            $request->image->move(public_path('pdf'),$newFileName);
        }

        $jobUpdate = Job::where('id',$id)->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'type' => $request->type,
            'category' => $request->category,
            'avaliability' => $request->avaliability,
            'experiencelevel' => $request->experiencelevel,
            'salarymin' => $request->salarymin,
            'salarymax' => $request->salarymax,
            'location' => $request->location,
            'languages' => $request->languages,
            'skills'  => $request->skills,
            'file_path' => $newFileName
        ]);

        if ($jobUpdate){
            Session::flash('success','Job posted successfully');
            return back();
        }else{
            Session::flash('fail','Something went Wrong');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function apply($id){
        return view('jobs.appilication')->with('id',$id);
    }

    public function makeApplication(){

    }
}
