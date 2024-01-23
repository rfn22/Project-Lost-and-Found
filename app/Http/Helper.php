<?php
use App\Models\Hilang;
use App\Models\Temuan;
use App\Models\Kategori;
class Helper{
    public static function Category(){
        $kategori = new Kategori();
        // dd($kategori);
        $menu=$kategori->getAllCatagory(); 
        if($menu){
            ?>
            <center>
                <a class=" btn btn-primary mb1 black bg-silver" href="/cariHilang">Semua Barang</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    foreach($menu as $cat_info){
                            ?>
                            <a class=" btn btn-default" href="<?php echo route('cariHilang',$cat_info->slug); ?>"><?php echo $cat_info->nama_kategori; ?></a>
                            &nbsp;&nbsp;&nbsp;<?php
                    }
                    ?>
            </center>
        <?php
        }
    }
    public static function Category1(){
        $kategori = new Kategori();
        // dd($kategori);
        $menu=$kategori->getAllCatagory(); 
        if($menu){
            ?>
            <center>
                <a class=" btn btn-primary mb1 black bg-silver" href="/ambiltemuan">Semua Barang</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                    foreach($menu as $cat_info){
                            ?>
                            <a  class=" btn btn-default" href="<?php echo route('ambilTemuan',$cat_info->slug); ?>"><?php echo $cat_info->nama_kategori; ?></a>
                            &nbsp;&nbsp;&nbsp;<?php
                    }
                    ?>
            </center>
        <?php
        }
    }
}