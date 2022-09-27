<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;
use PDF;

class MemberController extends Controller

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
        $members = Member::latest()->paginate(5);
          
        $pdf = PDF::loadView('members/indexPDF',compact('members'));
    
        return $pdf->download('Members.pdf');
    }

    public function index()

    {

        $members = Member::latest()->paginate(5);

        return view('members.index',compact('members'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function indexApproved()

    {

        $members = Member::latest()->paginate(5);

        return view('memberss.indexApproved',compact('members'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexWaiting()

    {

        $members = Member::latest()->paginate(5);

        return view('memberss.indexWaiting',compact('members'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function indexDeny()

    {

        $members = Member::latest()->paginate(5);

        return view('memberss.indexDeny',compact('members'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()

    {
        return view('members.create');

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
            'MartalStatus' => 'required',
            'MembershipType' => 'required',
        ]);
        Member::create($request->all());

    

        return redirect()->route('members.index')

                        ->with('success','Member created successfully.');

    }

    public function show(Member $member)

    {

        return view('members.show',compact('member'));

    }

    public function edit(Member $member)

    {

        return view('members.edit',compact('member'));

    }

    public function update(Request $request, Member $member)

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

        return redirect()->route('members.index')

                        ->with('success','Member updated successfully');

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