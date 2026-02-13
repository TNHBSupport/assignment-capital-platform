<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\DealApplication;

class AdvanceFeeController extends Controller
{
    /**
     * Display the advance fee application form
     */
    public function show()
    {
        return view('pages.advance-fee');
    }

    /**
     * Handle the form submission
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            // Contact
            'fullName' => 'required|string|max:255',
            'companyName' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'decisionMaker' => 'required|in:Yes,No',
            'role' => 'required|string|max:100',

            // Deal Snapshot
            'propertyAddress' => 'required|string|max:500',
            'state' => 'required|string|size:2',
            'closingDate' => 'required|date|after_or_equal:today',
            'dealType' => 'required|string|max:100',
            'buyerUnderContract' => 'required|in:Yes,No',
            'titleOpened' => 'required|in:Yes,No,Not sure',
            'titleCompanyName' => 'nullable|string|max:255',
            'titleCompanyContact' => 'nullable|string|max:255',

            // Assignment Fee & Numbers
            'assignmentFee' => 'required|numeric|min:0',
            'yourPortion' => 'required|numeric|min:0|lte:assignmentFee',
            'advanceRequestedMin' => 'required|numeric|min:0|lte:yourPortion',
            'advanceRequestedMax' => 'required|numeric|min:0|gte:advanceRequestedMin|lte:yourPortion',
            'fundingWhen' => 'required|string|max:100',
            'sellerContractPrice' => 'nullable|numeric|min:0',
            'endBuyerPrice' => 'nullable|numeric|min:0',
            'splittingFee' => 'required|in:Yes,No',
            'netPortion' => 'required_if:splittingFee,Yes|nullable|string|max:100',
            'useOfFunds' => 'nullable|string|max:255',

            // Deal Strength & Verification
            'emdAmount' => 'required|numeric|min:0',
            'emdCleared' => 'required|in:Yes,No,Not sure',
            'emdWho' => 'nullable|string|max:100',
            'contractsExecuted' => 'required|in:Yes,No',
            'buyerType' => 'nullable|string|max:100',
            'titlePaybackAuth' => 'required|in:Yes,No,Not sure',
            'contactTitleOk' => 'required|in:Yes,No',
            'ownRealEstate' => 'required|in:Yes,No',
            'ownRealEstateDetails' => 'required_if:ownRealEstate,Yes|nullable|string|max:1000',
            'notes' => 'nullable|string|max:2000',

            // Documents
            'purchaseContract' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
            'assignmentAgreement' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
            'proofOfFunds' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
            'jvAgreement' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();

        // Handle file uploads
        if ($request->hasFile('purchaseContract')) {
            $data['purchaseContract'] = $request->file('purchaseContract')->store('documents', 'public');
        }

        if ($request->hasFile('assignmentAgreement')) {
            $data['assignmentAgreement'] = $request->file('assignmentAgreement')->store('documents', 'public');
        }

        if ($request->hasFile('proofOfFunds')) {
            $data['proofOfFunds'] = $request->file('proofOfFunds')->store('documents', 'public');
        }

        if ($request->hasFile('jvAgreement')) {
            $data['jvAgreement'] = $request->file('jvAgreement')->store('documents', 'public');
        }

        // Save to database
        $application = DealApplication::create($data);

        // TODO: Send email notification
        // Mail::to('admin@example.com')->send(new NewDealApplicationMail($data));

        // Redirect back with success message
        return redirect()->route('advance-fee.show')
            ->with('success', 'Your deal has been submitted successfully! Reference #' . $application->id);
    }

    /**
     * Temporary list of submitted applications
     */
    public function index()
    {
        $applications = DealApplication::latest()->paginate(20);

        return view('pages.applications', compact('applications'));
    }

    /**
     * Temporary detail view for a single application
     */
    public function showApplication(DealApplication $application)
    {
        return view('pages.application-detail', compact('application'));
    }

    /**
     * Temporary delete for an application
     */
    public function destroy(DealApplication $application)
    {
        $application->delete();

        return redirect()->route('applications.index')
            ->with('success', 'Application deleted.');
    }
}
