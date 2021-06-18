<?php
    if(strpos($_SERVER['REQUEST_URI'],"pages")){
        exit(header("Location:../index.php"));
    }

    $besok                  = date("Y-m-d", strtotime("+1 day"));
    $thnbesok               = substr($besok,0,4);
    $blnbesok               = substr($besok,5,2);
    $tglbesok               = substr($besok,8,2);
?>


 <!-- ABOUT -->
 <section id="aboutRS" >
      <div class="container">
           <div class="row">
                <div class="col-md-6 col-sm-6">
                     <div class="about-info">
                          <h2 class="wow fadeInUp" data-wow-delay="0.8s" style="background-color: white; border-radius: 10px; padding: 10px;">Latar Belakang Berdirinya</h2>
                          <div class="wow fadeInUp" data-wow-delay="1s" style="background-color: white; border-radius: 10px; padding: 10px;">
                              <p>Perkembangan rumah sakit dari tahun ke tahun semakin meningkat seiring dengan meningkatnya jumlah penduduk. Saat ini perbandingan antara jumlah bed rumah sakit dengan jumlah penduduk di Indonesia masih sangat rendah.</p>
                              <p>dilatarbelakangi oleh kurangnya jumlah bed dan tingginya tuntutan dari pasien untuk mendapatkan pelayanan kesehatan yang professional dan bermutu di wilayah Jakabaring dan sekitarnya. Hal ini dikarenakan sampai saat ini di daerah sekitar hanya terdapat 4 (empat) buah rumah sakit yang melayani pasien umum.</p>
                              <br>
                              <p>Didorong oleh keinginan untuk dapat memberikan pelayanan kesehatan yang paripurna serta keinginan untuk ikut berperan serta membangun institusi pelayanan kesehatan secara khusus bagi warga masyarakat di Kabupaten Banyuasin, maka PT. Bunda Medika Jakabaring bertekad untuk mendirikan Rumah Sakit Bunda Medika Jakabaring di Kabupaten Banyuasin.</p>
                          </div>
                     </div>
                </div>
           </div>
      </div>
 </section>

 <!-- TEAM -->
 <section id="team" data-stellar-background-ratio="1">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="about-info">
                          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s"><center>Visi, Misi & Motto</center></h2>
                     </div>
                </div>
                <div style="padding:20px">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Visi</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <p style="font-size:15px">“ Menjadi Rumah Sakit Pilihan Utama Masyarakat dengan Pelayanan yang Berkualitas  Kebanggaan Masyarakat Sumatera Selatan di Tahun 2025 “</p>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Misi</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <p style="font-size:15px">1. Memberikan Pelayanan Kesehatan yang Berkualitas dan Bermutu.</p>
                         <p style="font-size:15px">2. Meningkatkan Kualitas Pengembangan SDM yang Profesional.</p>
                         <p style="font-size:15px">3. Meningkatkan dan Mengembangkan Kualitas Sarana dan Prasarana Rumah Sakit.</p>

                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Motto</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <p style="font-size:15px">“ Kepuasan Anda adalah Kebanggaan Kami “</p>
                    </div>
                </div>
               
           </div>
      </div>
 </section>

 <section id="team" data-stellar-background-ratio="1" style="background-color:  #f5f5f5;">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="about-info">
                          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s"><center>Tujuan & Budaya Kerja Kami</center></h2>
                     </div>
                </div>
                <div style="padding:20px">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Tujuan Pelayanan</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <p style="font-size:15px">1. Mewujudkan kasih kepada sesama melalui pelayanan kesehatan yang berkualitas untuk mencapai derajat kesehatan masyarakat yang optimal.</p>
                         <p style="font-size:15px">2. Sebagai Rumah Sakit yang mampu memberikan pelayanan kesehatan sesuai standar pelayanan kesehatan secara professional.</p>
                         <p style="font-size:15px">3. Sebagai Rumah Sakit yang mampu menjadi rujukan masyarakat yang memiliki pelayanan berkualitas, penuh cinta kasih yang tulus, hangat dan bersahabat.</p>

                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Budaya Kerja</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                         <p style="font-size:15px">1. Profesional</p>
                         <p style="font-size:15px">2. Berfikir Cerdas.</p>
                         <p style="font-size:15px">3. Bekerja Tuntas.</p>
                         <p style="font-size:15px">4. Beramal Ikhlas.</p>

                    </div>
                </div>
               
           </div>
      </div>
 </section>

 <section id="team" data-stellar-background-ratio="1">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="about-info">
                          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s"><center>Struktur Organisasi</center></h2>
                     </div>
                </div>
                <div class='col-md-12 col-sm-12' style="margin-bottom: 30px;">
                    <div class='team-thumb wow fadeInUp' style="background-color: #a5c422">
                         <img alt='Photo' src='images/so.png' class='img-responsive' style="padding:5px"/>
                    </div>
                </div>
               
           </div>
      </div>
 </section>


 <section id="google-map">
 <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63746.65454120349!2d104.76833307910157!3d-3.0502065000000034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbunda%20medika!5e0!3m2!1sen!2sid!4v1623985026917!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="450"></iframe>
 </section>     

 