<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deal_applications', function (Blueprint $table) {
            $table->id();
            // Contact
            $table->string('fullName');
            $table->string('companyName')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('decisionMaker');
            $table->string('role');

            // Deal Snapshot
            $table->string('propertyAddress', 500);
            $table->string('state', 2);
            $table->date('closingDate');
            $table->string('dealType');
            $table->string('buyerUnderContract');
            $table->string('titleOpened');
            $table->string('titleCompanyName')->nullable();
            $table->string('titleCompanyContact')->nullable();

            // Assignment Fee & Numbers
            $table->decimal('assignmentFee', 12, 2);
            $table->decimal('yourPortion', 12, 2);
            $table->decimal('advanceRequestedMin', 12, 2);
            $table->decimal('advanceRequestedMax', 12, 2);
            $table->string('fundingWhen');
            $table->decimal('sellerContractPrice', 12, 2)->nullable();
            $table->decimal('endBuyerPrice', 12, 2)->nullable();
            $table->string('splittingFee');
            $table->string('netPortion')->nullable();
            $table->string('useOfFunds')->nullable();

            // Deal Strength & Verification
            $table->decimal('emdAmount', 12, 2);
            $table->string('emdCleared');
            $table->string('emdWho')->nullable();
            $table->string('contractsExecuted');
            $table->string('buyerType')->nullable();
            $table->string('titlePaybackAuth');
            $table->string('contactTitleOk');
            $table->string('ownRealEstate');
            $table->text('ownRealEstateDetails')->nullable();
            $table->text('notes')->nullable();

            // Documents (stored paths)
            $table->string('purchaseContract')->nullable();
            $table->string('assignmentAgreement')->nullable();
            $table->string('proofOfFunds')->nullable();
            $table->string('jvAgreement')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_applications');
    }
};
