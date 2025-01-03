<?php
include "header.php";

include "sidebar.php";
?>
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">PROFIL</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    PROFIL
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content">
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row"> <!--begin::Col-->
                       <p> UPDATE ISI PROFIL </p>
                        <form action="update_profil.php" method="POST">
                            <input type="text" name="judul_profil" class="form-control" placeholder="Judul Profil" id="">
                            <textarea name="isi_profil" class="form-control" row="20" col="20" placeholder="Isi Profil" id=""></textarea>
                            <input type="file" name="upload_gambar" class="form-control" placeholder="Foto" id="">
                            <input type="submit" value="SIMPAN">
                        </form>
                </div>
            </div>
</main>
<?php
include "footer.php";
?>