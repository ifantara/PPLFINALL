<!DOCTYPE html><html><head><meta charset="utf-8"/>


  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>MEMASUKKAN JADWAL SIDANG</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="./assets/css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="./assets/css/responsive.css" rel="stylesheet"/>
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
                    <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <!--<li class="nav-item">
                    <a class="nav-link" href="<?= base_url('jadwal') ?>">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Account</a>
                  </li>-->

                </ul>
                <!--<form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <a href="/jadwal/create"><button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button></a>
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

<!-- contact section -->
<section class="contact_section layout_padding">
  <div class="container contact_heading">
    <h2>
     JADWAL UJIAN
   </h2>

 </div>
 <div class="container">
<form action="" id="formTambah">
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp"/>
        </div>
        <div class="form-group col-md-12">
            <label for="namamhs">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="namamhs"/>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label for="telp">Nomer Telepon</label>
        <input type="text" class="form-control" id="telp"/>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="namadosbing">Dosen Pembimbing</label>
            <input type="text" class="form-control" id="namadosbing"/>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="namadospen">Dosen Penguji</label>
            <input type="text" class="form-control" id="namadospen"/>
        </div>
    </div> 
    <div class="form-row ">
        <div class="form-group col-md-6">
            <label for="jadwal">Jadwal Ujian</label>
                <input type="date" class="form-control" data-date-end-date="0d" id="jadwal">
            </div> 
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">SUBMIT</button>
    </div>
</form>

</section>


<!-- end contact section -->
<div class="footer_bg">
  <!-- info section -->
  <section class="info_section layout_padding2-bottom">

  </section>
  <!-- footer section -->
</div>


<script type="text/javascript" src="./assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>

<script type="text/javascript">
$("#formTambah").on('submit', function(e){
    e.preventDefault();

    let Nrp = $("#nrp").val();
    let Mahasiswa = $("#namamhs").val();
    let Telp = $("#telp").val();
    let Dosbing = $("#namadosbing").val();
    let Dospen = $("#namadospen").val();
    let jadwal = $("#jadwal").val();

    //    console.log(JSON.stringify(formData));

    let sudo = {nrp: Nrp, namaMahasiswa: Mahasiswa, nomerTelepon: Telp, dosenPembimbing: Dosbing, dosenPenguji: Dospen, tanggal: jadwal};
    console.log(JSON.stringify(sudo));
    $.ajax({
        url: "<?=base_url('jadwal')?>",
        dataType: 'json',
        type: 'post',
        data: sudo,
        success: function(){
            window.location.replace("<?=base_url('/')?>");
        }
    });
});
</script>
</body>
</html>
