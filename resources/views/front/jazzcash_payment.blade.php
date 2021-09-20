
@extends('front/layouts')
@section('page_title','payment jazzcash')
@section('container')



 



<style>
    body {
        background: #fff;
    }

    form {
        margin: 0;
        padding: 0;
    }

    .jsformWrapper {
        border: 1px solid rgba(196, 21, 28, 0.50);
        padding: 2rem;
        width: 600px;
        margin: 0 auto;
        border-radius: 2px;
        margin-top: 2rem;
        box-shadow: 0 7px 5px #eee;
        height: 350px;
    }

        .jsformWrapper .formFielWrapper label {
            width: 300px;
            float: left;
        }

        .jsformWrapper .formFielWrapper input {
            width: 300px;
            padding: 0.5rem;
            border: 1px solid #ccc;
            float: left;
            font-family: sans-serif;
        }

        .jsformWrapper .formFielWrapper {
            float: left;
            margin-bottom: 1rem;
        }

        .jsformWrapper button {
            background: rgba(196, 21, 28, 1);
            border: none;
            color: #fff;
            width: 120px;
            height: 40px;
            line-height: 25px;
            font-size: 16px;
            font-family: sans-serif;
            text-transform: uppercase;
            border-radius: 2px;
            cursor: pointer;
        }

    h3 {
        text-align: center;
        margin-top: 3rem;
        color: rgba(196, 21, 28, 1);
    }
    _msg{
        background-color: yellow;
        font-size: 14px;


    }
</style>
<script>
    function submitForm() {

        CalculateHash();
        var IntegritySalt = document.getElementById("salt").innerText;
        var hash = CryptoJS.HmacSHA256(document.getElementById("hashValuesString").value, IntegritySalt);
        document.getElementsByName("pp_SecureHash")[0].value = hash + '';

        console.log('string: ' + hashString);
        console.log('hash: ' + document.getElementsByName("pp_SecureHash")[0].value);

        document.jsform.submit();
    }



</script>
<script src="https://sandbox.jazzcash.com.pk/Sandbox/Scripts/hmac-sha256.js"></script>

<h3>JazzCash HTTP POST (Page Redirection) Testing</h3>
<div class="jsformWrapper">
    <form name="jsform" method="post" action="https://sandbox.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform/">
        <input type="hidden" name="pp_Version" value="1.1">
        <input type="hidden" name="pp_TxnType" value="">
        <input type="hidden" name="pp_Language" value="EN">
        <input type="hidden" name="pp_MerchantID">
        <input type="hidden" name="pp_SubMerchantID" value="">
        <input type="hidden" name="pp_Password">
        <input type="hidden" name="pp_BankID" value="TBANK">
        <input type="hidden" name="pp_ProductID" value="RETL">

        <div class="formFielWrapper">
            <label class="active">pp_TxnRefNo: </label>
            <input type="text" name="pp_TxnRefNo" id="pp_TxnRefNo" value="T20210812225127">
        </div>

        <div class="formFielWrapper">
            <label class="active">pp_Amount: </label>
            <input type="text" name="pp_Amount" value="1000">
        </div>

        <input type="hidden" name="pp_TxnCurrency" value="PKR">
        <input type="hidden" name="pp_TxnDateTime" value="20210812225127">
        <div class="formFielWrapper">
            <label class="active">pp_BillReference: </label>
            <input type="text" name="pp_BillReference" value="billRef">
        </div>

        <div class="formFielWrapper">
            <label class="active">pp_Description: </label>
            <input type="text" name="pp_Description" value="Description of transaction">
        </div>

        <input type="hidden" name="pp_TxnExpiryDateTime" value="20210813225127">

        <div class="formFielWrapper">
            <label class="active">pp_ReturnURL: </label>
            <input type="text" name="pp_ReturnURL">
        </div>

        <input type="hidden" name="pp_SecureHash" value="">
        <input type="hidden" name="ppmpf_1" value="1">
        <input type="hidden" name="ppmpf_2" value="2">
        <input type="hidden" name="ppmpf_3" value="3">
        <input type="hidden" name="ppmpf_4" value="4">
        <input type="hidden" name="ppmpf_5" value="5">
        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <label id="salt" style="display:none;"></label>
    <br><br>
    <div class="formFielWrapper">
        <label class="active">Hash values string: </label>
        <input type="text" id="hashValuesString" value="">
        <br><br>
    </div>

</div>

<script>
    function CalculateHash() {
        var IntegritySalt = document.getElementById("salt").innerText;
        hashString = '';

        hashString += IntegritySalt + '&';

        if (document.getElementsByName("pp_Amount")[0].value != '') {
            hashString += document.getElementsByName("pp_Amount")[0].value + '&';
        }
        if (document.getElementsByName("pp_BankID")[0].value != '') {
            hashString += document.getElementsByName("pp_BankID")[0].value + '&';
        }
        if (document.getElementsByName("pp_BillReference")[0].value != '') {
            hashString += document.getElementsByName("pp_BillReference")[0].value + '&';
        }
        if (document.getElementsByName("pp_Description")[0].value != '') {
            hashString += document.getElementsByName("pp_Description")[0].value + '&';
        }
        if (document.getElementsByName("pp_Language")[0].value != '') {
            hashString += document.getElementsByName("pp_Language")[0].value + '&';
        }
        if (document.getElementsByName("pp_MerchantID")[0].value != '') {
            hashString += document.getElementsByName("pp_MerchantID")[0].value + '&';
        }
        if (document.getElementsByName("pp_Password")[0].value != '') {
            hashString += document.getElementsByName("pp_Password")[0].value + '&';
        }
        if (document.getElementsByName("pp_ProductID")[0].value != '') {
            hashString += document.getElementsByName("pp_ProductID")[0].value + '&';
        }
        if (document.getElementsByName("pp_ReturnURL")[0].value != '') {
            hashString += document.getElementsByName("pp_ReturnURL")[0].value + '&';
        }
        if (document.getElementsByName("pp_SubMerchantID")[0].value != '') {
            hashString += document.getElementsByName("pp_SubMerchantID")[0].value + '&';
        }
        if (document.getElementsByName("pp_TxnCurrency")[0].value != '') {
            hashString += document.getElementsByName("pp_TxnCurrency")[0].value + '&';
        }
        if (document.getElementsByName("pp_TxnDateTime")[0].value != '') {
            hashString += document.getElementsByName("pp_TxnDateTime")[0].value + '&';
        }
        if (document.getElementsByName("pp_TxnExpiryDateTime")[0].value != '') {
            hashString += document.getElementsByName("pp_TxnExpiryDateTime")[0].value + '&';
        }
        if (document.getElementsByName("pp_TxnRefNo")[0].value != '') {
            hashString += document.getElementsByName("pp_TxnRefNo")[0].value + '&';
        }
        if (document.getElementsByName("pp_TxnType")[0].value != '') {
            hashString += document.getElementsByName("pp_TxnType")[0].value + '&';
        }
        if (document.getElementsByName("pp_Version")[0].value != '') {
            hashString += document.getElementsByName("pp_Version")[0].value + '&';
        }
        if (document.getElementsByName("ppmpf_1")[0].value != '') {
            hashString += document.getElementsByName("ppmpf_1")[0].value + '&';
        }
        if (document.getElementsByName("ppmpf_2")[0].value != '') {
            hashString += document.getElementsByName("ppmpf_2")[0].value + '&';
        }
        if (document.getElementsByName("ppmpf_3")[0].value != '') {
            hashString += document.getElementsByName("ppmpf_3")[0].value + '&';
        }
        if (document.getElementsByName("ppmpf_4")[0].value != '') {
            hashString += document.getElementsByName("ppmpf_4")[0].value + '&';
        }
        if (document.getElementsByName("ppmpf_5")[0].value != '') {
            hashString += document.getElementsByName("ppmpf_5")[0].value + '&';
        }

        hashString = hashString.slice(0, -1);
        document.getElementById("hashValuesString").value = hashString;
    }

</script>






@endsection 