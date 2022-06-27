<div class="table-responsive">
    <table class="table table-bordered">
        <?php
        include '../../conek/koneksi.php';
        $page = (isset($_POST['page']))? $_POST['page'] : 1;
        $limit = 5; 
        $limit_start = ($page - 1) * $limit;
        if(isset($_POST['search']) && $_POST['search'] == true){
            $param = '%'.mysqli_real_escape_string($koneksi, $kata_kunci).'%';
            $sql = mysqli_query($koneksi, "SELECT * FROM lagu WHERE kata_kunci LIKE '".$param."' LIMIT ".$limit_start.",".$limit);
            $sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM lagu WHERE judul LIKE '".$param."' OR url LIKE '".$param."' OR foto LIKE '".$param."' OR kata_kunci LIKE '".$param."'");
            $get_jumlah = mysqli_fetch_array($sql2);
        }else{
            $sql = mysqli_query($koneksi, "SELECT * FROM lagu LIMIT ".$limit_start.",".$limit);
           $sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM lagu");
            $get_jumlah = mysqli_fetch_array($sql2);
        }
        $no = 1;
        while($data = mysqli_fetch_array($sql)){
        ?>
            <table width="100%" border="0">
                    <tr>
                        <td rowspan="2" width="5%" align="center"><?php echo $no; ?>.</td>
                        <td width="15%" rowspan="2">
                            <img src="<?php echo $data['foto']; ?>" width="100%" />
                        </td>
                        <td width="80%">
                            <h1 align="left"><?php echo $data['judul']; ?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top" align="left">
                            <audio controls src="<?php echo $data['url']; ?>"></audio>
                        </td>
                        <td>
                        <a href="<?php echo $data['url']; ?>">
                            <button title="<?php echo $data['judul']; ?> Download"style="width: 100px; height: 30px; align-items: center;">Download</button>
                        </a>
                            
                        </td>
                        <div>_______________________________________________________________</div>
                    </tr>
        <?php
        $no++;
    }
        ?>
    </table>
</div>
<?php
$count = mysqli_num_rows($sql);
if($count > 0){
    ?>
    <ul class="pagination">
        <?php
        if($page == 1){
        ?>
            <li class="disabled"><a href="#">First</a></li>
            <li class="disabled"><a href="#">&laquo;</a></li>
        <?php
        }else{
            $link_prev = ($page > 1)? $page - 1 : 1;
        ?>
            <li><a href="javascript:void(0);" onclick="searchWithPagination(1, false)">First</a></li>
            <li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_prev; ?>, false)">&laquo;</a></li>
        <?php
        }
        ?>
        <?php
        $jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
        $jumlah_number = 3;
        $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
        $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
        
        for($i = $start_number; $i <= $end_number; $i++){
            $link_active = ($page == $i)? ' class="active"' : '';
        ?>
            <li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $i; ?>, false)"><?php echo $i; ?></a></li>
        <?php
        }
        if($page == $jumlah_page){
        ?>
            <li class="disabled"><a href="#">&raquo;</a></li>
            <li class="disabled"><a href="#">Last</a></li>
        <?php
        }else{
            $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
        ?>
            <li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_next; ?>, false)">&raquo;</a></li>
            <li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $jumlah_page; ?>, false)">Last</a></li>
        <?php
        }
        ?>
    </ul>
    <?php    
}
?>
