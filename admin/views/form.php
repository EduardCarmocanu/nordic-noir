<form action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php $DBC->printOut($tours[$_SESSION['tour']]['id'])?>">
    <div class="row">
        <div class="form-control title">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Title" value="<?php $DBC->printOut($tours[$_SESSION['tour']]['title'])?>">
        </div>
        <div class="form-control price">
            <label for="price">Price per person - DKK</label>
            <input type="number" name="price" placeholder="price" value="<?php $DBC->printOut($tours[$_SESSION['tour']]['price'])?>">
        </div>
        <div class="form-control state">
            <span>Tour state</span>
            <div>
                <input type="radio" name="state" value="0" <?php if($tours[$_SESSION['tour']]['state'] == 0){ echo "checked";} ?>> Unpublished
            </div>
            <div>
                <input type="radio" name="state" value="1" <?php if($tours[$_SESSION['tour']]['state'] == 1){ echo "checked";} ?>> Published
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-control content">
            <label for="content">Content</label>
            <textarea name="content" id="content" rows="18"><?php $DBC->printOut($tours[$_SESSION['tour']]['content'])?></textarea>
        </div>
    </div>

    <div class="row">
        <div class="form-control content">
            <label for="aditional">Additional info</label>
            <textarea name="aditional" id="aditional" rows="10"><?php $DBC->printOut($tours[$_SESSION['tour']]['aditional_info'])?></textarea>
        </div>
    </div>

    <div class="row image-row">
        <div class="form-control photo">
            <label for="">
                Cover Photo
            </label>
            <div class="uploader" id="coverPhotoDiv">
                <div id="imageGoesHere">
                    <img src="<?php $DBC->printOut($tours[$_SESSION['tour']]['image_url'])?>"/>
                    <input type="file" name="inputPhoto" id="inputPhoto" />
                </div>
            </div>
            <label for="">Click here or drag an image here</label>
            
        </div>

        <div class="form-control photo">
            <label for="">
                Thumbnail Photo
            </label>
            <div class="uploader" id="thumbnailPhotoDiv">
                <div id="imageGoesHere2">
                    <img src="<?php $DBC->printOut($tours[$_SESSION['tour']]['thumbnail_url'])?>"/>
                    <input type="file" name="inputPhoto2" id="inputPhoto2" />
                </div>
            </div>
            <label for="">Click here or drag an image here</label>
        </div>
        <div class="buttons">
            <a href="/admin?deletetour=<?php $DBC->printOut($tours[$_SESSION['tour']]['id'])?>" class="delete-btn">Delete</a>                    
            <input type="submit" value="SAVE" class="btn btn-green" name="submit">
            
        </div>
    </div>
    
</form>