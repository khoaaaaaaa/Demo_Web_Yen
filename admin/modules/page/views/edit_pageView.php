<?php
get_header();
?>
 <div id="page-body" class="d-flex">
        <?php get_sidebar()?>
        <div id="wp-content">
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa trang
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="name">Tiêu đề trang</label>
                    <input type="text" class="form-control" value="<?php echo $edit_page['page_title']?>" name="page_title" id="title">
                        <?php echo form_error('page_title')?>
                </div>
                <div class="form-group">
                    <label for="content">Nội dung trang</label>
                    <textarea name="page_detail" id="desc" class="textarea" id="content" cols="30" rows="5"><?php echo $edit_page['page_detail']?></textarea>
                    <?php echo form_error('post_detail')?>
                </div>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="trangthai" id="exampleRadios1" value="Chờ duyệt" <?php if($edit_page['trangthai']=='Chờ duyệt'){ 'checked';}?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="trangthai" id="exampleRadios2" value="Công khai"  <?php if($edit_page['trangthai']=='Công khai'){ 'checked';}?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Công khai
                        </label>
                    </div>
                </div>
                <?php echo form_error('trangthai')?>
                <button type="submit" name="btn-edit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
<?php
get_footer();
?>