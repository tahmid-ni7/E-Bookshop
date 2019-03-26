<div class="menu-area">
    <div class="container">
        <div class="main-menu">
            <div class="row">
                <div class="col-md-3">
                    <div class="onclick-dropdown">
                        <button id="ctg">Books Category <span id="m-list"><i class="fas fa-list"></i></span></button>
                     
                        <ul class="active">
                            <?php foreach($category as $ctg): ?>
                                
                            <?php print '<li><a href="'.base_url('users/all_books').'/?ctg='.$ctg->id.'">'.$ctg->category.'</a></li>';?>
                           
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="menu">
                        <ul>
                            <li><a href="<?= base_url()?>home">Home</a></li>
                            <li><a href="<?= base_url()?>users/all_books">Books</a></li>
                            <li><a href="#">E-learning <i class="fas fa-arrow-alt-circle-right"></i></a></li>
                            <li><a href="<?= base_url()?>admin">Admin <i class="fas fa-tools"></i></a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            
                            <?php $type = $this->session->userdata('type') ?>
                            <?php if($type == 'U'): ?>
                            <li class="btn-user"><a href="<?= base_url()?>user_home"><i class="far fa-user"></i> My account</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
