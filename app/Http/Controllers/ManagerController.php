<?php

namespace App\Http\Controllers;
use App\Models\Manager;
use Illuminate\Http\Request;
use PDF;

class ManagerController extends Controller

{ 
    function __construct()

    {

         $this->middleware('permission:manager-list|manager-create|manager-edit|manager-delete', ['only' => ['index','show']]);

         $this->middleware('permission:manager-create', ['only' => ['create','store']]);

         $this->middleware('permission:manager-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:manager-delete', ['only' => ['destroy']]);

    }

    public function generateManagerPDF()
    {
        $managers = Manager::latest()->paginate(5);
          
        $pdf = PDF::loadView('managers/indexPDF',compact('managers'));
    
        return $pdf->download('Managers.pdf');
    }

    public function index()

    {

        $managers = Manager::latest()->paginate(5);

        return view('managers.index',compact('managers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexx()

    {

        $managers = Manager::latest()->paginate(5);

        return view('managers.indexx',compact('managers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexxx()

    {

        $managers = Manager::latest()->paginate(5);

        return view('managers.indexxx',compact('managers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexxxx()

    {

        $managers = Manager::latest()->paginate(5);

        return view('managers.indexxxx',compact('managers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function generateindexxxxPDF()
    {
        $managers = Manager::latest()->paginate(5);
          
        $pdf = PDF::loadView('managers/indexxxxPDF',compact('managers'));
    
        return $pdf->download('Managers.pdf');
    } public function generateindexxxPDF()
    {
        $managers = Manager::latest()->paginate(5);
          
        $pdf = PDF::loadView('managers/indexxxPDF',compact('managers'));
    
        return $pdf->download('Managers.pdf');
    } public function generateindexxPDF()
    {
        $managers = Manager::latest()->paginate(5);
          
        $pdf = PDF::loadView('managers/indexxPDF',compact('managers'));
    
        return $pdf->download('Managers.pdf');
    }


    public function create()

    {
        return view('managers.create');

    }

    public function store(Request $request)

    {

        request()->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'Gender' => 'required',
            'Email' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'Address' => 'required',
            'ManagerType' => 'required',

        ]);
        Manager::create($request->all());

    

        return redirect()->route('managers.index')

                        ->with('success','Manager created successfully.');

    }

    public function show(Manager $manager)

    {

        return view('managers.show',compact('manager'));

    }

    public function edit(Manager $manager)

    {

        return view('managers.edit',compact('manager'));

    }

    public function update(Request $request, Manager $manager)

    {

         request()->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'Gender' => 'required',
            'Email' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'Address' => 'required',
            'ManagerType' => 'required',
        ]);

        $manager->update($request->all());

        return redirect()->route('managers.index')

                        ->with('success','Manager updated successfully');

    }


    public function destroy(Manager $manager)

    {

        $manager->delete();
        return redirect()->route('managers.index')

                        ->with('success','Manager deleted successfully');

    }

}