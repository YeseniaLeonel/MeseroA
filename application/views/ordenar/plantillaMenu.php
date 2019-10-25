<br>
<div class="container">
    
    <div class="form-check">
        <div class="row"><h2> <?php echo "$titulo" ?></h2></div>
        <?php foreach ($menuArray as $key => $p): ?>
        <div class="row">
        <br><br>
                <div class="col">                    
                        <div>
                            <?php if(isset($p->ID_platillo)){
                                    $nombre = $p->nombre_platillo;
                                    $id = $p->ID_platillo;
                                   }else{
                                        $id = $p->ID_bebida;
                                        $nombre = $p->nombre_b;
                                   }
                            ?>
                            
                            <input class="form-check-input" type="checkbox" value="<?php echo "$nombre" ?>" name=Seleccionados[] >
                            <label class="form-check-label" for="defaultCheck1">
                                <?php if(isset($p->nombre_b)){ 
                                         echo "$p->nombre_b";
                                 }else{
                                    echo "$p->nombre_platillo";
                                 }?>            
                            </label>
                        </div>              
                       
                </div>
                <div class="col">
                    <label class="form-check-label" for="defaultCheck1">
                        <?php if(isset($p->nombre_b)){ 
                                 echo "$ $p->precio_b";
                         }else{
                            echo "$ $p->precio_p";
                         }?>            
                    </label>
                </div>
        </div>
        <?php endforeach; ?>  
    </div>
</div>