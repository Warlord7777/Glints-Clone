@extends('layouts.mainUser')
@push('script')
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function() {
   $('select[name="matauang"]').select2({
     width: '10%',
     placeholder: 'Pilih mata uang',
     minimumResultsForSearch: Infinity // Untuk menyembunyikan fitur pencarian
   });
 });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
   
    function tampilkanTampilan1() {
       document.getElementById("tampilan1").style.display = "block";
       document.getElementById("tampilan2").style.display = "none";
     }
     
    function tampilkanTampilan2() {
    document.getElementById("tampilan1").style.display = "none";
    document.getElementById("tampilan2").style.display = "block";
    }
       
     function tampilkanKonten() {
       var selectElement = document.getElementById("mySelect");
       var selectedOption = selectElement.value;
       
       switch (selectedOption) {
         case "option1":
       document.getElementById("konten1").style.display = "block";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
 
         case "option2":
 document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "block";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
         case "option3":
         document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "block";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
        
         case "option4":
         document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "block";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
         case "option5":
         document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "block";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option6":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "block";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option7":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "block";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option8":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "block";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option9":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "block";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option10":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "block";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option11":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "block";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option12":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "block";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option13":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "block";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option14":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "Block";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option15":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "block";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option16":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "block";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option17":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "block";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option18":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "Block";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option19":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "block";
       document.getElementById("konten20").style.display = "none";
           break;
           case "option20":
           document.getElementById("konten1").style.display = "none";
       document.getElementById("konten2").style.display = "none";
       document.getElementById("konten3").style.display = "none";
       document.getElementById("konten4").style.display = "none";
       document.getElementById("konten5").style.display = "none";
       document.getElementById("konten6").style.display = "none";
       document.getElementById("konten7").style.display = "none";
       document.getElementById("konten8").style.display = "none";
       document.getElementById("konten9").style.display = "none";
       document.getElementById("konten10").style.display = "none";
       document.getElementById("konten11").style.display = "none";
       document.getElementById("konten12").style.display = "none";
       document.getElementById("konten13").style.display = "none";
       document.getElementById("konten14").style.display = "none";
       document.getElementById("konten15").style.display = "none";
       document.getElementById("konten16").style.display = "none";
       document.getElementById("konten17").style.display = "none";
       document.getElementById("konten18").style.display = "none";
       document.getElementById("konten19").style.display = "none";
       document.getElementById("konten20").style.display = "block";
           break;
         default:
         alert("Silakan pilih opsi yang valid.");
           break;
       }
     }
   
         
    </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
@endpush
@push('style')
       <style>
    .tampilan1 {
      display: block;
    }
    
    .tampilan2 {
      display: none;
    }
        .container {
        max-width: 50%;

        }
        .satu {
            max-width: 100%;
            height: 20vh;
        }
        .dua {

            height: 50%;
            overflow: auto;
        }
        .container {
        max-width: 38%;
        border: 1px solid black;

        }
        .checkboxes {
            text-align: left;
        }
        .bnt {
    color: rgb(0, 0, 0);
    background-color: white;
    border: none; 
    border-bottom: 1.5px solid black;
  }
  
  .bnt:hover {
    color: rgb(0, 0, 0);
    background-color: white;
    border-bottom: 3px solid rgb(141, 141, 141);
  }
  
  .bnt:focus {
    outline: none;
  }
  input[type="checkbox"] {
        zoom: 1.5; /* Atur faktor zoom sesuai kebutuhan */
    }
    .input-group {
      display: flex;
      align-items: center;
    }

    .input-group .currency {
      padding-right: 5px;
    }

    .input-group input[type="number"] {
      width: 70%;
    }
  

  
  </style>
@endpush
@section('content')
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col">
                <div class="segment " style="text-align: center;">
                    <p style="  margin-top: 20px; text-align: left;" > <h4 > <b >MINAT & PREFERENSI PEKERJAAN </b></h4> <a href="/user/profil"> <button  type="button"  style="position: relative; top: -30px; float: right;" class="btn-close" aria-label="Close"></button> </a>
                
                    </div>
                    <br>

                    <div>
                    <p>
                        Adding your job interests and preferences helps us in recommending suitable jobs for you.
                    </p>
                    </div>

              <div class="row">
                <div class="col-5">
                    <button class="bnt" onclick="tampilkanTampilan1()">MINAT PEKERJAAN</button>
                </div>
                <div class="col-5">
                    <button class="bnt" onclick="tampilkanTampilan2()">PREFRENSI</button>
                </div>
              </div> 
              <br>
              <div style="  margin-top: 20px; text-align: left;" ></div>
        </div>


       
              <div id="tampilan1" class="tampilan1">
                <div class="row">
                    <div class="col">
                        <div class="box">
                        <form action="/user/interest" method="POST">
                            @csrf
                            @method('put')
                          <div class="col-12 lg mb-3" style="text-align: center;">
                             <select class="form-select" id="mySelect" onchange="tampilkanKonten()">
                                <div class="satu">
                                    <div class="dua"></div>
                                </div>
                           <option selected>Pekerjaan</option>
                               <option value="option1">Building & Contraction</option>
                               <option value="option2">Buisness Development & Sales</option>
                               <option value="option3">Computer & Information Technology</option>
                               <option value="option4">Costomer Service</option>
                               <option value="option5">Design</option>
                               <option value="option6">Education & Training</option>
                               <option value="option7">HealthCare</option>
                               <option value="option8">Hotel,Restourant   & Travel</option>
                               <option value="option9">Legal,Consulting & Translation</option>
                               <option value="option10">Management</option>
                               <option value="option11">Manifacturing & Production</option>
                               <option value="option12">Marketing</option>
                               <option value="option13">Media & Comunications</option>
                               <option value="option14">Operations</option>
                               <option value="option15">Others</option>
                               <option value="option16">Product Management & Project Management</option>
                               <option value="option17">Purchasing,Procurement & Trade</option>
                               <option value="option18">Real Estate & Architecture</option>
                               <option value="option19">Science & Research</option>
                               <option value="option20"> Supply Chain & Logistics </option>
                               </select>
                              <div>
                                <br>
                            

                             <div class="col" style="border-top: 1px solid black; text-align: left;">
                              <br>
                              <div class="row">
                                <div class="col">
                                <div id="konten1" style="display: none;">
                                        <input type="checkbox" name="frefrensi[] " value="Civil Engineer" > Civil Engineer<br>
                                        <input type="checkbox" name="frefrensi[]" value="Construction Supervisor" > Construction Supervisor <br>
                                        <input type="checkbox" name="frefrensi[]" value="Construction Worker" > Construction Worker <br>
                                        <input type="checkbox" name="frefrensi[]" value="Drainage Engineer" > Drainage Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Facade Engineer" > Facade Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Fire Safety Engineer" > Fire Safety Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="HVAC Engineer" > HVAC Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Structural Engineer" > Structural Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Building Construction Project Manager" > Building Construction Project Manager <br>
                                        <input type="checkbox" name="frefrensi[]" value="Construction Safety Officer" > Construction Safety Officer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Engineering Manager" > Engineering Manager <br>
                                        <input type="checkbox" name="frefrensi[]" value="Other Building & Construction Positions" > Other Building & Construction Positions <br>
                                        <input type="checkbox" name="frefrensi[]" value="Quantity Surveyor" > Quantity Surveyor <br>
                                </div>
                                      
                                <div id="konten2" style="display: none;">
                                      <input type="checkbox" name="frefrensi[]" value="Account Executive" > Account Executive <br>
                                      <input type="checkbox" name="frefrensi[]" value="Account Manager & Business Development" > Account Manager & Business Development <br>
                                      <input type="checkbox" name="frefrensi[]" value="Customer Representative" > Customer Representative <br>
                                      <input type="checkbox" name="frefrensi[]" value="Relationship Manager & Business Development" > Relationship Manager & Business Development <br>
                                      <input type="checkbox" name="frefrensi[]" value="Business Development Executive" > Business Development Executive <br>
                                      <input type="checkbox" name="frefrensi[]" value="Business Development Representative" > Business Development Representative <br>
                                      <input type="checkbox" name="frefrensi[]" value="Business Development Manager" > Business Development Manager <br>
                                      <input type="checkbox" name="frefrensi[]" value="Business Unit Manager" > Business Unit Manager <br>
                                      <input type="checkbox" name="frefrensi[]" value="Commercial Director" > Commercial Director                  <br>
                                      <input type="checkbox" name="frefrensi[]" value="Other Business Development & Sales Positions" > Other Business Development & Sales Positions <br>
                                      <input type="checkbox" name="frefrensi[]" value="Regional Sales Director" > Regional Sales Director <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Assistant" > Sales Assistant <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Associate" > Sales Associate <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Consultant" > Sales Consultant <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Development Representative" > Sales Development Representative <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Director" > Sales Director <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Engineer" > Sales Engineer <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Executive" > Sales Executive <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Manager" > Sales Manager <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Operations " > Sales Operations <br>
                                      <input type="checkbox" name="frefrensi[]" value="Sales Vice President" > Sales Vice President <br>
                                      <input type="checkbox" name="frefrensi[]" value="Telemarketer" > Telemarketer <br>
                                      <input type="checkbox" name="frefrensi[]" value="balapan" > balapan <br>
                                      
                                      
                                </div>
                                      
                                <div id="konten3" style="display: none;">
                                        <input type="checkbox" name="frefrensi[]" value="AI Engineer" > AI Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Algorithm Engineer" > Algorithm Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Algorithm Researcher" > Algorithm Researcher <br>
                                        <input type="checkbox" name="frefrensi[]" value="Machine Learning Engineer" > Machine Learning Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Self Driving System Engineer" > Self Driving System Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Backend Developer" > Backend Developer <br>
                                        <input type="checkbox" name="frefrensi[]" value="C# Developer" > C# Developer <br>
                                        <input type="checkbox" name="frefrensi[]" value="C++ Developer" > C++ Developer <br>
                                        <input type="checkbox" name="frefrensi[]" value="GIS Engineer" > GIS Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Java Developer" > Java Developer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Java Software Engineer" > Java Software Engineer <br>
                                        <input type="checkbox" name="frefrensi[]" value="Business Intelligence Analyst" > Business Intelligence Analyst <br>
                                        <input type="checkbox" name="frefrensi[]" value="Data Analyst" > Data Analyst <br>
                                        <input type="checkbox" name="frefrensi[]" value="Data Architect" > Data Architect <br>
                                        <input type="checkbox" name="frefrensi[]" value="Data Controller " > Data Controller  <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Encoder" > Data Encoder <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Engineer" > Data Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Entry" > Data Entry <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Entry Clerk" > Data Entry Clerk <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Entry Specialist" > Data Entry Specialist <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Scientist" > Data Scientist <br>
                                        <input type="checkbox" name="frefrensi[]"value="ETL Engineer" > ETL Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Electrical Design Engineer" > Electrical Design Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Electrical Engineer" > Electrical Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Electronics Engineer" > Electronics Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Field Application Engineer" > Field Application Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="IC Verification Engineer" > IC Verification Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Integrated Circuit Designer" > Integrated Circuit Designer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Layout Design Engineer" > Layout Design Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Flash Development Engineer" > Flash Development Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Frontend Developer" > Frontend Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Frontend Engineer" > Frontend Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Automation Engineer" > Automation Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Embedded Engineer" > Embedded Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Hardware Engineer" > Hardware Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Optical Engineer" > Optical Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Radio Frequency Engineer" > Radio Frequency Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Android Developer" > Android Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Mobile Developer" > Mobile Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Xamarin Developer" > Xamarin Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="iOS Developer" > iOS Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Database Administrator" > Database Administrator <br>
                                        <input type="checkbox" name="frefrensi[]"value="Internet Network Specialist" > Internet Network Specialist <br>
                                        <input type="checkbox" name="frefrensi[]"value="Network Administrator" > Network Administrator <br>
                                        <input type="checkbox" name="frefrensi[]"value="  Network Engineer" >  Network Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Network Expert" > Network Expert <br>
                                        <input type="checkbox" name="frefrensi[]"value="Network Professional" > Network Professional <br>
                                        <input type="checkbox" name="frefrensi[]"value="Network Specialist" > Network Specialist <br>
                                        <input type="checkbox" name="frefrensi[]"value="Network Support Engineer" > Network Support Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="System Administrator" > System Administrator <br>
                                        <input type="checkbox" name="frefrensi[]"value="System Analyst" > System Analyst <br>
                                        <input type="checkbox" name="frefrensi[]"value="System Engineer" > System Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Cyber Security" > Cyber Security <br>
                                        <input type="checkbox" name="frefrensi[]"value="Devops Engineer" > Devops Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="IT Technical Support" > IT Technical Support <br>
                                        <input type="checkbox" name="frefrensi[]"value="Operation & Maintenance Engineer" > Operation & Maintenance Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Security Engineer" > Security Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Site Reliability Engineer" > Site Reliability Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="System Security" > System Security <br>
                                        <input type="checkbox" name="frefrensi[]"value="Technical Document Engineer" > Technical Document Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="AR & VR Engineer" > AR & VR Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Game Developer" > Game Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="IT Specialist" > IT Specialist <br>
                                        <input type="checkbox" name="frefrensi[]"value="Information Technology Staff" > Information Technology Staff <br>
                                        <input type="checkbox" name="frefrensi[]"value="IoT Engineer" > IoT Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Keyboard Specialist" > Keyboard Specialist <br>
                                        <input type="checkbox" name="frefrensi[]"value="Other Technical Positions" > Other Technical Positions <br>
                                        <input type="checkbox" name="frefrensi[]"value="Solution Architect" > Solution Architect <br>
                                        <input type="checkbox" name="frefrensi[]"value="QA Engineer" > QA Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="QA Manager" > QA Manager <br>
                                        <input type="checkbox" name="frefrensi[]"value="QA Tester" > QA Tester <br>
                                        <input type="checkbox" name="frefrensi[]"value="Chief Technology Officer" > Chief Technology Officer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Operation & Maintenance Director" > Operation & Maintenance Director <br>
                                        <input type="checkbox" name="frefrensi[]"value="Software Engineering Manager" > Software Engineering Manager <br>
                                        <input type="checkbox" name="frefrensi[]"value="Technical Director" > Technical Director <br>
                                        <input type="checkbox" name="frefrensi[]"value="Technical Manager" > Technical Manager <br>
                                        <input type="checkbox" name="frefrensi[]"value="Technical Partner" > Technical Partner <br>
                                        <input type="checkbox" name="frefrensi[]"value="Test Manager" > Test Manager <br>
                                        <input type="checkbox" name="frefrensi[]"value="Build & Release Engineer" > Build & Release Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Cloud Architect" > Cloud Architect <br>
                                        <input type="checkbox" name="frefrensi[]"value="Cloud Engineer" > Cloud Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Compiler Engineer" > Compiler Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Computer Programmer" > Computer Programmer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Developer" > Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Forward Deployed Engineer" >       Forward Deployed Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Full Stack Engineer" > Full Stack Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Javascript Developer" > Javascript Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Junior Software Engineer" > Junior Software Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Mulesoft Developer" > Mulesoft Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Pega Developer " > Pega Developer            <br>
                                        <input type="checkbox" name="frefrensi[]"value="Platform Engineer" > Platform Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Principal Engineer" > Principal Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Programmer" > Programmer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Senior Software Engineer" > Senior Software Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="ServiceNow Developer" > ServiceNow Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Siebel Developer" > Siebel Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Software Architect" > Software Architect <br>
                                        <input type="checkbox" name="frefrensi[]"value="Software Developer" > Software Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Software Engineer" > Software Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Staff Engineer" > Staff Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Web Developer" > Web Developer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Technical Sales Support" > Technical Sales Support <br>
                                        <input type="checkbox" name="frefrensi[]"value="Technical Support Engineer" > Technical Support Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Equipment Engineer" > Communication Equipment Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Power Engineer" > Communication Power Engineer<br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Project Commissioner" > Communication Project Commissioner <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Project Manager" > Communication Project Manager <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication R&D Engineer" > Communication R&D Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Standardization Engineer" > Communication Standardization Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Technical Engineer" > Communication Technical Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Communication Test Engineer" > Communication Test Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Core Network Engineer" > Core Network Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Data Communication Engineer" > Data Communication Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Mobile Communication Engineer" > Mobile Communication Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Optical Communication Engineer" > Optical Communication Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Optical Network Engineer" > Optical Network Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Optical Transmission Engineer" > Optical Transmission Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Telecommunications Network Engineer" > Telecommunications Network Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Telecommunications Switch Engineer" > Telecommunications Switch Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Wired Transmission Engineer" > Wired Transmission Engineer <br>
                                        <input type="checkbox" name="frefrensi[]"value="Wireless & RF Communication Engineer" > Wireless & RF Communication Engineer <br>
                                        
                                </div>
                                
                                
                                <div id="konten4" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Customer Service Director" > Customer Service Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Customer Service Manager" > balaCustomer Service Managerpan <br>
                                    <input type="checkbox" name="frefrensi[]"value="Customer Service Representative" > Customer Service Representative <br>
                                    <input type="checkbox" name="frefrensi[]"value="Customer Service Specialist" > Customer Service Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Emergency Call Operator" > Emergency Call Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Emergency Call Taker" > Emergency Call Taker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Public Safety Call Taker" > Public Safety Call Taker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Customer Service Positions" > Other Customer Service Positions <br>
                                   
                                </div>
                                
                                <div id="konten5" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Exhibition Designer" > Exhibition Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Furniture Designer" > Furniture Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Industrial Designer" >    brIndustrial Designer <br>                           Industrial Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Jewelry Designer" > Jewelry Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Lighting Designer" > Lighting Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Visual Merchandising Designer" > Visual Merchandising Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Design Positions" > Other Design Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="User Research Director" > User Research Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="User Research Manager" > User Research Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="User Researcher" > User Researcher <br>
                                    <input type="checkbox" name="frefrensi[]"value="3D Designer" > 3D Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Animator" > Animator <br>
                                    <input type="checkbox" name="frefrensi[]"value="App Designer" > App Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="CAD Designer" > CAD Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="CAD Engineer" > CAD Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Cartoonist" > Cartoonist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Design Manager" > Design Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Design Director" > Design Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Designer Assistant" > Designer Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Flash Designer" > Flash Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Graphic & Brand Designer" > Graphic & Brand Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Illustrator" > Illustrator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Interaction Designer" > Interaction Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Multimedia Designer" > Multimedia Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Designer" > Product Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="UI/UX Designer" > UI/UX Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Visual Designer" > Visual Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Web Designer" > Web Designer <br>
                                    
                                </div>
                
                                <div id="konten6" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Education Consultant" > Education Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Enrollment Consultant" > Enrollment Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Study Abroad Consultant" > Study Abroad Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Academic Coordinator" > Academic Coordinator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Educational Administrative Staff" > Educational Administrative Staff <br>
                                    <input type="checkbox" name="frefrensi[]"value="Homeroom Teacher & Counselor" > Homeroom Teacher & Counselor <br>
                                    <input type="checkbox" name="frefrensi[]"value="President & Vice President" > President & Vice President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Principal" > Principal <br>
                                    <input type="checkbox" name="frefrensi[]"value="Principal & Deputy Director" > Principal & Deputy Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Education & Training Positions" > Other Education & Training Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Badminton Coach" > Badminton Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Basketball Coach" > Basketball Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Coach " > Coach                                 <br>
                                    <input type="checkbox" name="frefrensi[]"value="Driving School Instructor" > Driving School Instructor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Football Coach" > Football Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Guitar Teacher" > Guitar Teacher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Martial Arts Coach" > Martial Arts Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Music Teacher" > Music Teacher     <br>
                                    <input type="checkbox" name="frefrensi[]"value="Piano Teacher" > Piano Teacher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Roller Skating Coach" > Roller Skating Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Sports Coach" > Sports Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Table Tennis Coach" > Table Tennis Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Taekwondo Coach" > Taekwondo Coach <br>
                                    <input type="checkbox" name="frefrensi[]"value="Early Education Teacher" > Early Education Teacher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Education Officer" > Education Officer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Educator" > Educator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Facilitator" > Facilitator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Instructor" > Instructor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Lecturer" > Lecturer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Teacher" > Teacher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Teacher Aide" > Teacher Aide <br>
                                    <input type="checkbox" name="frefrensi[]"value="Tutor" > Tutor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Finance Training Lecturer" > Finance Training Lecturer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Human Resource Training Lecturer" > Human Resource Training Lecturer <br>
                                    <input type="checkbox" name="frefrensi[]"value="IT Trainer" > IT Trainer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Trainer" > Trainer <br>
                                </div>
                                
                                <div id="konten7" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Clinical Research Associate" > Clinical Research Associate <br>
                                    <input type="checkbox" name="frefrensi[]"value="Clinical Trial Coordinator" > Clinical Trial Coordinator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Clinical Trial Manager & Specialist" > Clinical Trial Manager & Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Anesthesiologist" > Anesthesiologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Assistant Doctor" > Assistant Doctor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Counselor" > Counselor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Dentist" > Dentist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Dermatologist" > Dermatologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Doctor" > Doctor <br>
                                    <input type="checkbox" name="frefrensi[]"value="General Practitioner" > General Practitioner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Internal Medicine Physician" > Internal Medicine Physician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Medical Resident" > Medical Resident <br>
                                    <input type="checkbox" name="frefrensi[]"value="Obstetrician" > Obstetrician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Ophthalmologist" > Ophthalmologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Optometrist" > Optometrist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Otolaryngologist" > Otolaryngologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pathologist" > Pathologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pediatrician" > Pediatrician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Plastic Surgeon" > Plastic Surgeon     <br>
                                    <input type="checkbox" name="frefrensi[]"value="Psychiatrist" > Psychiatrist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Radiographer" > Radiographer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Surgeon" > Surgeon <br>
                                    <input type="checkbox" name="frefrensi[]"value="Traditional Chinese Medicine Practitioner" > Traditional Chinese Medicine Practitioner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Health Consultant" > Health Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Medical Devices Salesperson" > Medical Devices Salesperson <br>
                                    <input type="checkbox" name="frefrensi[]"value="Medical Salesperson" > Medical Salesperson <br>
                                    <input type="checkbox" name="frefrensi[]"value="Oral Consultant" > Oral Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pharmaceutical Representative" > Pharmaceutical Representative <br>
                                    <input type="checkbox" name="frefrensi[]"value="Biomedical Technician" > Biomedical Technician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Medical Coder" > Medical Coder <br>
                                    <input type="checkbox" name="frefrensi[]"value="Midwife" > Midwife <br>
                                    <input type="checkbox" name="frefrensi[]"value="Paramedic" > Paramedic <br>
                                    <input type="checkbox" name="frefrensi[]"value="Radiologic Technologist" > Radiologic Technologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Head Nurse" > Head Nurse <br>
                                    <input type="checkbox" name="frefrensi[]"value="Health Administrator" > Health Administrator <br>
                                    <input type="checkbox" name="frefrensi[]"value="ICU Nurse" > ICU Nurse <br>
                                    <input type="checkbox" name="frefrensi[]"value="Nurse" > Nurse <br>
                                    <input type="checkbox" name="frefrensi[]"value="Occupational Health Nurse" > Occupational Health Nurse <br>
                                    <input type="checkbox" name="frefrensi[]"value="Occupational Therapist" > Occupational Therapist <br>
                                    <input type="checkbox" name="frefrensi[]"value="University Nurse" > University Nurse <br>
                                    <input type="checkbox" name="frefrensi[]"value="Ward Nurse" > Ward Nurse <br>
                                    <input type="checkbox" name="frefrensi[]"value="Nutritionist" > Nutritionist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Rehabilitation Therapist" > Rehabilitation Therapist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Healthcare Positions" > Other Healthcare Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pharmacist" > Pharmacist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pharmacy Clerk" > Pharmacy Clerk <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pharmacy Manager" > Pharmacy Manager <br>
                                  
                                </div>
                                
                                <div id="konten8" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Barista" > Barista <br>
                                    <input type="checkbox" name="frefrensi[]"value="Bartender" > Bartender <br>
                                    <input type="checkbox" name="frefrensi[]"value="Cake Decorator" > Cake Decorator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Cashier" > Cashier <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chef" > Chef <br>
                                    <input type="checkbox" name="frefrensi[]"value="Host & Hostess" > Host & Hostess <br>
                                    <input type="checkbox" name="frefrensi[]"value="Kitchen Manager" >Kitchen Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Kitchen Staff" > Kitchen Staff <br>
                                    <input type="checkbox" name="frefrensi[]"value="Meal Delivery" > Meal Delivery <br>
                                    <input type="checkbox" name="frefrensi[]"value="Restaurant Manager" > Restaurant Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Waitress & Waiter" > Waitress & Waiter <br>
                                    <input type="checkbox" name="frefrensi[]"value="Butler" > Butler <br>
                                    <input type="checkbox" name="frefrensi[]"value="Homestay Host" > Homestay Host <br>
                                    <input type="checkbox" name="frefrensi[]"value="Hotel Lobby Manager" > Hotel Lobby Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Hotel Manager" > Hotel Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Hotel Receptionist" > Hotel Receptionist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Housekeeping Manager" > Housekeeping Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Room Attendant" >  Room Attendant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Hotel, Restaurant & Travel Positions" > Other Hotel, Restaurant & Travel Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Operator" > Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Ticketing Staff" > Ticketing Staff <br>
                                    <input type="checkbox" name="frefrensi[]"value="Tour Guide" > Tour Guide <br>
                                    <input type="checkbox" name="frefrensi[]"value="Travel Agent" > Travel Agent <br>
                                    <input type="checkbox" name="frefrensi[]"value="Travel Consultant" > Travel Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Travel Planner" > Travel Planner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Visa Specialist" > Visa Specialist <br>
                                    
                                </div>
                                
                                
                                <div id="konten9" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Advisor" > Advisor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Consultant" > Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Creative Consultant" > Creative Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Environment Consultant" > Environment Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Management Consultant" > Management Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Market Researcher" > Market Researcher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Technology Consultant" > Technology Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Attorney" > Attorney <br>
                                    <input type="checkbox" name="frefrensi[]"value="Law Clerk" > Law Clerk <br>
                                    <input type="checkbox" name="frefrensi[]"value="Lawyer" > Lawyer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Legal Adviser" > Legal Adviser <br>
                                    <input type="checkbox" name="frefrensi[]"value="Legal Associate" > Legal Associate<br>
                                    <input type="checkbox" name="frefrensi[]"value="Legal Director" > Legal Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Legal Manager" > Legal Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Legal Specialist & Assistant" > Legal Specialist & Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Paralegal" > Paralegal <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Legal, Consulting & Translation Positions" > Other Legal, Consulting & Translation Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Bahasa Indonesia Translator" > Bahasa Indonesia Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chinese Translator" > Chinese Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="English Translator" > English Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="French Translator" > French Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="German Translator" > German Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Japanese Translator" > Japanese Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Korean Translator" > Korean Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Russian Translator" > Russian Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Spanish Translator" > Spanish Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Translator" > Translator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Vietnamese Translator" > Vietnamese Translator <br>
                                </div>
                                
                                <div id="konten10" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Business Manager" > Business Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Business Owner" > Business Owner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Employer" > Employer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Executive" > Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Founder" > Founder <br>
                                    <input type="checkbox" name="frefrensi[]"value="Manager" > Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Owner" > Owner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Supervisor" > Supervisor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Assistant Vice President" > Assistant Vice President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Board Secretary" > Board Secretary <br>
                                    <input type="checkbox" name="frefrensi[]"value="Branch Manager" > Branch Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chief Executive" > Chief Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chief Executive Officer" > Chief Executive Officer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chief of Staff" > Chief of Staff <br>
                                    <input type="checkbox" name="frefrensi[]"value="Deputy General Manager" > Deputy General Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Deputy President" > Deputy President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Executive Vice President" > Executive Vice President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Management Executive" > Management Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Managing Director" > Managing Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="President" > President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Regional Heads" > Regional Heads <br>
                                    <input type="checkbox" name="frefrensi[]"value="Senior Vice President" > Senior Vice President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Vice President" > Vice President <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Management Positions" > Other Management Positions <br>
                                    
                                </div>
                
                                <div id="konten11" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Fashion Designer" > Fashion Designer   <br>
                                    <input type="checkbox" name="frefrensi[]"value="Patternmaker" > Patternmaker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Tailor" > Tailor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Textile Designer" > Textile Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Automotive Design Engineer" > Automotive Design Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Automotive Electrical Engineer" > Automotive Electrical Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Automotive Interior Designer" > Automotive Interior Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Automotive Project Manager" > Automotive Project Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chassis Engineer" > Chassis Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chemical Engineer" > Chemical Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chemical Project Manager" > Chemical Project Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Geological Engineer" > Geological Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Oil & Gas Engineer" > Oil & Gas Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Solar Engineer" > Solar Engineer<br>
                                    <input type="checkbox" name="frefrensi[]"value="Wind Turbine Technician" > Wind Turbine Technician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Environmental Engineer" > Environmental Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Environmental Health Safety (EHS) Engineer" > Environmental Health Safety (EHS) Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Environmental Impact Assessment (EIA) Engineer" > Environmental Impact Assessment (EIA) Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Environmental Test Engineer" > Environmental Test Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Maintenance Crew" > Maintenance Crew <br>
                                    <input type="checkbox" name="frefrensi[]"value="Maintenance Electrician" > Maintenance Electrician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Maintenance Engineer" > Maintenance Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Maintenance Executive" > Maintenance Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Maintenance Manager" > Maintenance Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Machine Operator" > Machine Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Machinist" > Machinist <br>
                                    <input type="checkbox" name="frefrensi[]"value="CNC Machinist" > CNC Machinist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Electrical & Mechanical Engineer" > Electrical & Mechanical Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Fixture Engineer" > Fixture Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Hydraulic Engineer" > Hydraulic Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Industrial Engineer" > Industrial Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Material Engineer" > Material Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Mechanic" > Mechanic <br>
                                    <input type="checkbox" name="frefrensi[]"value="Mechanical Design Engineer" > Mechanical Design Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Mechanical Engineer" > Mechanical Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Mechanical Structure Engineer" > Mechanical Structure Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Mechatronics Engineer" > Mechatronics Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Molding Process Engineer" > Molding Process Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Thermal Engineer" > Thermal Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Battery Engineer" > Battery Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="EV Charging Engineer" > EV Charging Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Harness Design Engineer" > Harness Design Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Motor Engineer" > Motor Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Manufacturing & Production Positions" > Other Manufacturing & Production Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Process Engineer" > Process Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Factory Director" > Factory Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Industrial Equipment Manager" > Industrial Equipment Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Production Manager" > Production Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Production Team Leader" > Production Team Leader <br>
                                    <input type="checkbox" name="frefrensi[]"value="Workshop Manager" > Workshop Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Automotive Quality Engineer" > Automotive Quality Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Failure Analysis Engineer" > Failure Analysis Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Metering Engineer" > Metering Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Non-Destructive Testing (NDT) Technician" > Non-Destructive Testing (NDT) Technician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pipeline Inspector" > Pipeline Inspector <br>
                                    <input type="checkbox" name="frefrensi[]"value="Pressure Vessel Inspector" > Pressure Vessel Inspector <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Certification Engineer" > Product Certification Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Quality Inspector" > Quality Inspector <br>
                                    <input type="checkbox" name="frefrensi[]"value="Reliability Engineer" > Reliability Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Safety Assistant" > Safety Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Safety Coordinator" > Safety Coordinator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Safety Engineer" > Safety Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Safety Evaluator" > Safety Evaluator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Safety Manager" > Safety Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Safety Officer" > Safety Officer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Quality Assurance Assistant" > Quality Assurance Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Quality Assurance Clerk" > Quality Assurance Clerk <br>
                                    <input type="checkbox" name="frefrensi[]"value="Quality Assurance Inspector" > Quality Assurance Inspector <br>
                                    <input type="checkbox" name="frefrensi[]"value="Quality Assurance Leader" > Quality Assurance Leader <br>
                                    <input type="checkbox" name="frefrensi[]"value="Air-Conditioner Technician" > Air-Conditioner Technician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Apprentice" > Apprentice <br>
                                    <input type="checkbox" name="frefrensi[]"value="Arc Welder" > Arc Welder <br>
                                    <input type="checkbox" name="frefrensi[]"value="Assembler" > Assembler <br>
                                    <input type="checkbox" name="frefrensi[]"value="Carpenter" > Carpenter <br>
                                    <input type="checkbox" name="frefrensi[]"value="Electrician" > Electrician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Elevator Technician" > Elevator Technician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Excavator Operator" > Excavator Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Forklift Operator" > Forklift Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="General Worker" > General Worker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Loading & Unloading Worker" > Loading & Unloading Worker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Packer" > Packer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Packing Worker" > Packing Worker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Painter" > Painter <br>
                                    <input type="checkbox" name="frefrensi[]"value="Welder" > Welder <br>
                                    <input type="checkbox" name="frefrensi[]"value="Plumber" > Plumber <br>
                
                                </div>
                                
                                <div id="konten12" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Conference Event Executive" > Conference Event Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Conference Event Planner" > Conference Event Planner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Convention & Exhibition Planner" > Convention & Exhibition Planner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Exhibition Event Executive" > Exhibition Event Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="CRM Manager" > CRM Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="CRM Specialist" > CRM Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Content Creator" > Content Creator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Content Marketing Manager" > Content Marketing Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Digital Marketing Manager" > Digital Marketing Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Digital Marketing Specialist" > Digital Marketing Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="SEO Manager" > SEO Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="SEO Specialist" > SEO Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Social Media Manager" > Social Media Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Social Media Specialist" > Social Media Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Traffic Acquisition Specialist" > Traffic Acquisition Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="E-Commerce Manager" > E-Commerce Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chief Marketing Officer" > Chief Marketing Officer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Community Manager" > Community Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Event Planner" > Event Planner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Growth Marketing" > Growth Marketing <br>
                                    <input type="checkbox" name="frefrensi[]"value="Marketing Analyst" > Marketing Analyst <br>
                                    <input type="checkbox" name="frefrensi[]"value="Marketing Director" > Marketing Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Marketing Executive" > Marketing Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Marketing Manager" > Marketing Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Marketing Manager" > Product Marketing Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Marketing Positions" > Other Marketing Positions <br>
                                
                                </div>
                                
                                <div id="konten13" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Advertising Account Executive" > Advertising Account Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Advertising Account Manager" > Advertising Account Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Advertising Sales Representative" > Advertising Sales Representative <br>
                                    <input type="checkbox" name="frefrensi[]"value="Creative Director" > Creative Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Creative Executive" > Creative Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Events Manager" > Events Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Media Consultant" > Media Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Media Director" > Media Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Media Manager" > Media Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Media Planner" > Media Planner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Public Relations Director" > Public Relations Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Public Relations Manager" > Public Relations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Copywriter & Copyeditor" > Copywriter & Copyeditor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Deputy Editor" > Deputy Editor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Editor" > Editor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Editorial Assistant" > Editorial Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Editorial Staff" > Editorial Staff <br>
                                    <input type="checkbox" name="frefrensi[]"value="Journalist" > Journalist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Publisher" > Publisher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Media & Communications Positions" > Other Media & Communications Positions <br>
                                </div>
                                
                                
                                <div id="konten14" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Business Operations Director" > Business Operations Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Business Operations Executive" > Business Operations Executive <br>
                                    <input type="checkbox" name="frefrensi[]"value="Business Operations Manager" > Business Operations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Category Operations Manager" > Category Operations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chief Operations Officer" > Chief Operations Officer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Data & Strategy Operations Manager" > Data & Strategy Operations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="E-Commerce Operations Manager" > E-Commerce Operations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Game Operations Manager" > Game Operations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Operations Assistant" > Operations Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Operations Specialist" > Operations Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Operations Manager" > Product Operations Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Operations Positions" > Other Operations Positions <br>
                                    
                                </div>
                                
                                <div id="konten15" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Business Professional" > Business Professional <br>
                                    <input type="checkbox" name="frefrensi[]"value="balapan" >Business Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Employee" > Employee <br>
                                    <input type="checkbox" name="frefrensi[]"value="Intern" > Intern <br>
                                    <input type="checkbox" name="frefrensi[]"value="Civil Servant" > Civil Servant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Government Relations" > Government Relations <br>
                                    <input type="checkbox" name="frefrensi[]"value="Librarian" > Librarian <br>
                                    <input type="checkbox" name="frefrensi[]"value="Homemaker" > Homemaker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Others" > Others <br>
                                   
                                </div>
                                <div id="konten16" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Other Product Management & Project Management Positions" > Other Product Management & Project Management Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="AI Product Manager" > AI Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Business Analyst" > Business Analyst<br>
                                    <input type="checkbox" name="frefrensi[]"value="Data Product Manager" > Data Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Game Product Manager" > Game Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Hardware Product Manager" > Hardware Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Mobile Product Manager" > Mobile Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Manager" > Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Owner" > Product Owner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Product Specialist" > Product Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Senior Product Manager" > Senior Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Web Product Manager" > Web Product Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Hardware Project Manager" > Hardware Project Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Implementation Consultant" > Implementation Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Implementation Engineer" > Implementation Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Project Assistant" > Project Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Project Manager" > Project Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Project Specialist" > Project Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Scrum Master" > Scrum Master <br>
                                
                                </div>
                                
                                <div id="konten17" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Customs & Inspection Clerk" > Customs & Inspection Clerk <br>
                                    <input type="checkbox" name="frefrensi[]"value="Import & Export Trader" > Import & Export Trader <br>
                                    <input type="checkbox" name="frefrensi[]"value="Import Assistant" > Import Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Import Coordinator" > Import Coordinator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Purchasing, Procurement & Trade Positions" > Other Purchasing, Procurement & Trade Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Bidder" > Bidder <br>
                                    <input type="checkbox" name="frefrensi[]"value="Bidding Commissioner" > Bidding Commissioner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Buyer" > Buyer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Commodity Manager" > Commodity Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Procurement Specialist & Assistant" > Procurement Specialist & Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Purchasing Director" > Purchasing Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Purchasing Engineer" > Purchasing Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Purchasing Manager" > Purchasing Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Supplier Quality Engineer" > Supplier Quality Engineer <br>
                                    
                                </div>
                                
                                <div id="konten18" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Architect" > Architect <br>
                                    <input type="checkbox" name="frefrensi[]"value="Building Information Modeling (BIM) Engineer" > Building Information Modeling (BIM) Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Interior Designer" > Interior Designer<br>
                                    <input type="checkbox" name="frefrensi[]"value="Landscape Designer" > Landscape Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Urban Planner & Designer" > Urban Planner & Designer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Real Estate & Architecture Positions" > Other Real Estate & Architecture Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Landscape Engineer" > Landscape Engineer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Maintenance Worker" > Maintenance Worker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Property Administrator" > Property Administrator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Property Manager" > Property Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Appraiser" > Real Estate Appraiser <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Planner" > Real Estate Planner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Project Manager" > Real Estate Project Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Agent" > Real Estate Agent <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Auction Director" > Real Estate Auction Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Consultant" > Real Estate Consultant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Real Estate Sales Director" > Real Estate Sales Director <br>
                                   
                                </div>
                                
                                
                                <div id="konten19" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Other Science & Research Positions" > Other Science & Research Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Aide" > Laboratory Aide     <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Analyst" > Laboratory Analyst <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Assistant" > Laboratory Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Facilitator" > Laboratory Facilitator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Manager" > Laboratory Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Officer" > Laboratory Officer <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Supervisor" > Laboratory Supervisor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Laboratory Technician" > Laboratory Technician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Research Assistant" > Research Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Research Fellow" > Research Fellow <br>
                                    <input type="checkbox" name="frefrensi[]"value="Researcher" > Researcher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Scientific Researcher" > Scientific Researcher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Zoologist" > Zoologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Actuarial Scientist & Statistician" > Actuarial Scientist & Statistician <br>
                                    <input type="checkbox" name="frefrensi[]"value="Agriculture Scientist" > Agriculture Scientist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Biologist" > Biologist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Biomedical Scientist" > Biomedical Scientist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Biotechnology Scientist" > Biotechnology Scientist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Chemist" > Chemist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Geologist & Geophysicist" > Geologist & Geophysicist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Scientist" > Scientist <br>
                                </div>
                                
                                <div id="konten20" style="display: none;">
                                    <input type="checkbox" name="frefrensi[]"value="Crane Operator" > Crane Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Other Supply Chain & Logistics Positions" > Other Supply Chain & Logistics Positions <br>
                                    <input type="checkbox" name="frefrensi[]"value="Warehouse Assistant" > Warehouse Assistant <br>
                                    <input type="checkbox" name="frefrensi[]"value="Warehouse Checker" > Warehouse Checker <br>
                                    <input type="checkbox" name="frefrensi[]"value="Warehouse Clerk" > Warehouse Clerk <br>
                                    <input type="checkbox" name="frefrensi[]"value="Warehouse Controller" > Warehouse Controller <br>
                                    <input type="checkbox" name="frefrensi[]"value="Warehouse Coordinator" > Warehouse Coordinator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Container Management" > Container Management <br>
                                    <input type="checkbox" name="frefrensi[]"value="Courier" > Courier <br>
                                    <input type="checkbox" name="frefrensi[]"value="Delivery Manager" > Delivery Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value=" Freight Agent Manager" > Freight Agent Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Freight Agent Specialist" > Freight Agent Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Independent Distributor" > Independent Distributor <br>
                                    <input type="checkbox" name="frefrensi[]"value="Logistic Specialist" > Logistic Specialist <br>
                                    <input type="checkbox" name="frefrensi[]"value="Logistics & Warehousing Project Manager" > Logistics & Warehousing Project Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Logistics Director" > Logistics Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Logistics Manager" > Logistics Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Logistics Operations" > Logistics Operations <br>
                                    <input type="checkbox" name="frefrensi[]"value="Shipper" > Shipper <br>
                                    <input type="checkbox" name="frefrensi[]"value="Supply Chain Commissioner" > Supply Chain Commissioner <br>
                                    <input type="checkbox" name="frefrensi[]"value="Supply Chain Director" > Supply Chain Director <br>
                                    <input type="checkbox" name="frefrensi[]"value="Supply Chain Manager" > Supply Chain Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="Corporate Chauffeur" > Corporate Chauffeur <br>
                                    <input type="checkbox" name="frefrensi[]"value="Delivery Driver" > Delivery Driver <br>
                                    <input type="checkbox" name="frefrensi[]"value="Dispatcher" > Dispatcher <br>
                                    <input type="checkbox" name="frefrensi[]"value="Driver" > Driver <br>
                                    <input type="checkbox" name="frefrensi[]"value="Freight Driver" > Freight Driver <br>
                                    <input type="checkbox" name="frefrensi[]"value="Motor Vehicle Operator" > Motor Vehicle Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Private Hire Driver" > Private Hire Driver <br>
                                    <input type="checkbox" name="frefrensi[]"value="Taxi Driver" > Taxi Driver <br>
                                    <input type="checkbox" name="frefrensi[]"value="Transport Manager" > Transport Manager <br>
                                    <input type="checkbox" name="frefrensi[]"value="UAV Operator" > UAV Operator <br>
                                    <input type="checkbox" name="frefrensi[]"value="Valet" > Valet <br>
                                    
                                </div>
                                <br>
                
                                </div>
                              </div>

                               
                              
                              </div>
                              
                          </div>
                       </div>
                        
                            
                        </div>
                    </div>
                  
                   
                
            </div>
           
            <div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
                <br>
                <div class="button-container" style="text-align: right;">
                    <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" style="border-radius: 7px;" type="button"><b>SIMPAN</b></button>
                    </div>
                </div>
            </div>
            
          </div>
          
                <br>
                <br>
                    <div id="tampilan2" class="tampilan2">
                     <p>Tipe Pekerjaan</p>
                     <div class="col">
                        <input type="checkbox" name="tipe[]" value="Full Time">Full Time <br>
                        <input type="checkbox" name="tipe[]" value="Part Time">Part Time <br>
                        <input type="checkbox" name="tipe[]" value="Freelance">Freelance <br>
                        <input type="checkbox" name="tipe[]" value="Magang">Magang <br>
                     </div>
                     <div class="row">
                        <div class="col" style="border-top: 1px solid rgb(61, 61, 61); padding-bottom: 30px;">
                            <br>
                            <P>Ekspektasi Gaji</P>
                            <div class="col">
                                <div class="input-group">
                                    <span class="currency">IDR</span>
                                    <input type="text" class="form-control" name="gaji" placeholder="Input Salary">
                                  </div>  
                            </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col" style="border-top: 1px solid rgb(61, 61, 61); padding-bottom: 30px;">
                            <p>
                                Preferensi Kota Kerja
                            </p>

                            
                            <div>
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" name="kota" id="kota">
                            </div>

                        </div>
                     </div>
                     <div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
                        <br>
                        
                        <div class="button-container" style="  text-align: right;">
                          <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="submit"><b>SIMPAN</b></button>
                          </div>
                    </div>
            </form>
                        
  </div>
</div>

@endsection