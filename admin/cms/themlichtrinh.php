
<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $error = array(); //Khoi tao mang loi rong
                  if(empty($_POST['malichtrinh']))
                {
                    $error[]='malichtrinh';
                }
                else
                {
                    $malichtrinh=$_POST['malichtrinh']; 
                }
                if(empty($_POST['gadi_id']))
                {
                    $error[]='gadi_id';
                }
                else
                {
                    $gadi_id=$_POST['gadi_id']; 
                }
                if(empty($_POST['gaden_id']))
                {
                    $error[]='gaden_id';
                }
                else
                {
                    $gaden_id=$_POST['gaden_id']; 
                }
                 if(empty($_POST['ngaydi']))
                {
                    $error[]='ngaydi';
                }
                else
                {
                    $ngaydi=$_POST['ngaydi'];
                }
                if(empty($_POST['ngayve']))
                {
                    $error[]='ngayve';
                }
                else
                {
                    $ngayve=$_POST['ngayve'];
                }
                  if(empty($_POST['matau']))
                {
                    $error[]='matau';
                }
                else
                {
                    $matau=$_POST['matau'];
                }
                if(empty($_POST['chieudi']))
                {
                    $error[]='chieudi';
                }
                else
                {
                    $khuhoi=$_POST['chieudi'];
                }
                if(empty($_POST['khoihanh']))
                {
                    $error[]='khoihanh';
                }
                else
                {
                    $khoihanh=$_POST['khoihanh'];
                }
                
   
                 
                if (empty($error))
                {                      
                    $query = "insert into lichtrinh(malichtrinh, gadi_id, gaden_id ,ngaydi,ngayve,motchieu,khuhoi,khoihanh ) values('$malichtrinh','$gadi_id', '$gaden_id', '$ngaydi', '$ngayve',  '$khoihanh','$matau', '$chieudi')";
                    $count=$db->exec($query);
                }
            }
        ?>
                 <div class="span9">
                     <div class="content">
                       <div class="module">
                          <div class="module-head">
                            <h3>Th??m m???i L???ch Tr??nh</h3>
                          </div>
                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                               
                                <div class="control-group">
                                   <label class="control-label">M?? L???ch Tr??nh</label>
                                    <div class="controls">
                                        <input type="text" name="malichtrinh" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('malichtrinh', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               
                               <div class="control-group">
                                    <label class="control-label">Ga ??i</label>
                                        <div class="controls">
                                            <input type="text" name="gadi_id" class="span6"/>
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('gadi_id', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">Ga ?????n</label>
                                  <div class="controls">
                                <input type="text" name="gaden_id" class="span6" />
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('gaden_id', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                                <div class="control-group">
                                   <label class="control-label">Ng??y ??i</label>
                                    <div class="controls">
                                    <input type="text" name="ngaydi" class="span6">
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('ngaydi', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                                <div class="control-group">
                                   <label class="control-label">Ng??y V???</label>
                                    <div class="controls">
                                        <input type="text" name="ngayve" class="span6" />
                
                                                <?php
                                                    if(!empty($error) && in_array('ngayve', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div>   
                               <div class="control-group">
                                   <label class="control-label">Kh???i H??nh</label>
                                    <div class="controls">
                                    <input type="text" name="khoihanh" class="span6" >
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('khoihanh', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               <div class="control-group">
                                    <label class="control-label">M?? T??u</label>
                                        <div class="controls">
                                            <input type="text" name="matau" class="span6" />
                
                                             <?php
                                                    if(!empty($error) && in_array('matau', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                               <div class="control-group">
                                <label class="control-label">Chi???u ??i</label>
                                  <div class="controls">
                                    <input type="text" name="chieudi" class="span6" />
                                            <span class="errors">
                                                <?php
                                                    if(!empty($error) && in_array('chieudi', $error))
                                                    {
                                                        echo "M???i nh???p th??ng tin !";
                                                    }
                                                ?>
                                             </span>
                                        </div>
                                </div> 
                               
                            
                               
                               <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn-inverse">Th??m m???i</button>      
                                    </div>
                                </div>
                           </form>
                        </div> 
                </div>
             </div>
 