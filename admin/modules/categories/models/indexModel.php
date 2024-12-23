<?php
    function get_list_category(){
        $result = db_fetch_array("SELECT * FROM `tbl_danhmuc` ");
        return $result;
    }

    function get_category_by_id($danhmuc_id){
        $result=db_fetch_row("SELECT * FROM `tbl_danhmuc` WHERE `danhmuc_id`='{$danhmuc_id}'");
        if(!empty($result)){        
            return $result;
        }
        else{
            echo "không tồn tại";
        } 
    }

    function get_danhmuc_by_kieu_and_cap($kieu, $cap) {
        $cap = $cap - 1;
        $result = db_fetch_array("SELECT * FROM `tbl_danhmuc` WHERE `kieu` = '{$kieu}' AND `cap` = '{$cap}'");
        return $result;
    }

    function get_ten($danhmuc_id) {
        $result = db_fetch_row("SELECT * FROM `tbl_danhmuc` WHERE `danhmuc_id`={$danhmuc_id}");
        return $result['ten_danhmuc']; // Trả về 0 nếu không tìm thấy
    }
    function get_danhmuc_cha($danhmuc_id) {
        // Lấy thông tin danh mục cha từ cơ sở dữ liệu
        $result = db_fetch_row("SELECT * FROM `tbl_danhmuc` WHERE `danhmuc_id`={$danhmuc_id}");
        return $result['danhmuc_id_cha'] ?? 0; // Trả về 0 nếu không tìm thấy
    }
    
    function ajax_ten_danhmuc_cha($danhmuc_id) {
        $mang = [$danhmuc_id]; // Thêm danh mục hiện tại vào mảng
    
        while ($danhmuc_id != 0) {
            // Lấy danh mục cha
            $danhmuc_id = get_danhmuc_cha($danhmuc_id);
            
            if ($danhmuc_id != 0) {
                // Thêm danh mục cha vào mảng
                $mang[] = $danhmuc_id;
            }
        }
    
        return $mang; // Trả về mảng các danh mục (bao gồm cả danh mục hiện tại và các danh mục cha)
    }
?>