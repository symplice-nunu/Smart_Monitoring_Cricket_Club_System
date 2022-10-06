<?php

namespace App\Http\Controllers;
use App\Models\Playground;
use Illuminate\Http\Request;
use PDF;

class PlaygroundController extends Controller

{ 
    function __construct()

    {

         $this->middleware('permission:member-list|member-create|member-edit|member-delete', ['only' => ['index','show']]);

         $this->middleware('permission:member-create', ['only' => ['create','store']]);

         $this->middleware('permission:member-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:member-delete', ['only' => ['destroy']]);

    }

    public function generatePDF()
    {
        $playgrounds = Playground::latest()->paginate(5);
          
        $pdf = PDF::loadView('playground/indexPDF',compact('playgrounds'));
    
        return $pdf->download('Playgrounds.pdf');
    }
    public function generateDPlPDF()
    {
        $playgrounds = Playground::latest()->paginate(5);
          
        $pdf = PDF::loadView('playground/indexxxPDF',compact('playgrounds'));
    
        return $pdf->download('Playgrounds.pdf');
    }
    
    public function generateAPlPDF()
    {
        $playgrounds = Playground::latest()->paginate(5);
          
        $pdf = PDF::loadView('playground/indexxPDF',compact('playgrounds'));
    
        return $pdf->download('Playgrounds.pdf');
    }

    public function index()

    {

       $playgrounds = Playground::latest()->paginate(5);

        return view('playground.indexWaiting',compact('playgrounds'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function indexApproved()

    {

       $playgrounds = Playground::latest()->paginate(5);

        return view('playground.indexApproved',compact('playgrounds'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function Status()

    {

       $playgrounds = Playground::latest()->paginate(5);

        return view('playground.status',compact('playgrounds'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexWaiting()

    {

       $playgrounds = Playground::latest()->paginate(5);

        return view('memberss.indexWaiting',compact('playgrounds'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexDeny()

    {

       $playgrounds = Playground::latest()->paginate(5);

        return view('playground.indexDeny',compact('playgrounds'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()

    {
        return view('playground.create');

    }

    public function store(Request $request)

    {

        request()->validate([
            'Name' => 'required',
            'Email' => 'required',
            'DateTimeStart' => 'required',
        ]);
        Playground::create($request->all());

    

        return redirect()->route('playground.index')

                        ->with('success','Application for using Playground Submitted Successfully.');

    }

    public function show(Member $member)

    {

        return view('members.show',compact('member'));

    }

    public function edit(Member $member)

    {

        return view('members.edit',compact('member'));

    }

    public function update(Request $request, Playground $playground)

    {

         request()->validate([
            // 'FirstName' => 'required',
            // 'LastName' => 'required',
            // 'Gender' => 'required',
            // 'Email' => 'required',
            // 'Country' => 'required',
            // 'Phone' => 'required',
            // 'Address' => 'required',
            // 'MartalStatus' => 'required',
            // 'MembershipType' => 'required',
        ]);

        $playground->update($request->all());

        return redirect()->route('playground.index')

                        ->with('success','Your Request Approved');

    }
    public function updatee(Request $request, Member $member)

    {

         request()->validate([
            // 'FirstName' => 'required',
            // 'LastName' => 'required',
            // 'Gender' => 'required',
            // 'Email' => 'required',
            // 'Country' => 'required',
            // 'Phone' => 'required',
            // 'Address' => 'required',
            // 'MartalStatus' => 'required',
            // 'MembershipType' => 'required',
        ]);

        $member->update($request->all());

        return redirect()->url('members.index')

                        ->with('success','Member updated successfully');

    }



    public function destroy(Member $member)

    {

        $member->delete();
        return redirect()->route('members.index')

                        ->with('success','Member deleted successfully');

    }

}