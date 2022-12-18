<!DOCTYPE html><html><head><meta charset="utf-8"/>


  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>SIMTA NG 2</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="/assets/css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="/assets/css/responsive.css" rel="stylesheet"/>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="/">
                <span>
                 Admin
               </span>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                 <a class="nav-link" href="/">home</a>
                  </li>
                  <!--<li class="nav-item active">
                    <a class="nav-link" href="#">about <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">akun</a>
                  </li>-->

                </ul>
                <!--<form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>-->
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- end header section -->
</div>

<!-- welcome section -->
<section class="welcome_section layout_padding">
  <div class="container">

    <div class="layout_padding2">
     <div class="custom_heading-container">
      <h2>
       Jadwal Sidang
     </h2>
   </div>
   <div class="detail-box">

    <div class="container mt-3">

      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>NO</th>
            <th>NRP</th>
            <th>NAMA</th>
            <th>NOMER TELEPON</th>
            <th>DOSEN PEMBIMBING</th>
            <th>DOSEN PENGUJI</th>
            <th>JADWAL</th>
          </tr>
        </thead>
        <tbody id="tabelData">
        </tbody>
      </table>

    </div>
    <div>
      <a class="btn btn-primary" href="/buat">Masukkan jadwal</a>
       
    
    </div>
  </div>
</div>

</div>
</section>
<!-- end welcome section -->
<script type="text/javascript" src="./assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>

<script>
$(document).ready(function(){
    // ambil data all
$.ajax({
        url: "<?=base_url('jadwal')?>",
        dataType: 'json',
        type: 'get',
        cache: false,
        success: function(data){
            var event_data = "";
            let no = 1;
            $.each(data, function(index, value){
                event_data += "<tr>";
                event_data += "<td>"+no+"</td>";
                event_data += "<td>"+value.nrp+"</td>";
                event_data += "<td>"+value.namaMahasiswa+"</td>";
                event_data += "<td>"+value.nomerTelepon+"</td>";
                event_data += "<td>"+value.dosenPembimbing+"</td>";
                event_data += "<td>"+value.dosenPenguji+"</td>";
                event_data += "<td>"+value.tanggal+"</td>";
                event_data += "</tr>";
                no++;
            });
            $("#tabelData").append(event_data);
        },
        error: function(d){
            $("#tabelData").append("<tr><td>Data tidak ditemukan</td></tr>");
        }
});
});
</script>
</body></html>
