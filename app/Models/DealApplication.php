<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DealApplication extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'fullName',
        'companyName',
        'email',
        'phone',
        'decisionMaker',
        'role',
        'propertyAddress',
        'state',
        'closingDate',
        'dealType',
        'buyerUnderContract',
        'titleOpened',
        'titleCompanyName',
        'titleCompanyContact',
        'assignmentFee',
        'yourPortion',
        'advanceRequestedMin',
        'advanceRequestedMax',
        'fundingWhen',
        'sellerContractPrice',
        'endBuyerPrice',
        'splittingFee',
        'netPortion',
        'useOfFunds',
        'emdAmount',
        'emdCleared',
        'emdWho',
        'contractsExecuted',
        'buyerType',
        'titlePaybackAuth',
        'contactTitleOk',
        'ownRealEstate',
        'ownRealEstateDetails',
        'notes',
        'purchaseContract',
        'assignmentAgreement',
        'proofOfFunds',
        'jvAgreement',
    ];

    protected $casts = [
        'closingDate' => 'date',
        'assignmentFee' => 'decimal:2',
        'yourPortion' => 'decimal:2',
        'advanceRequestedMin' => 'decimal:2',
        'advanceRequestedMax' => 'decimal:2',
        'sellerContractPrice' => 'decimal:2',
        'endBuyerPrice' => 'decimal:2',
        'emdAmount' => 'decimal:2',
    ];
}
