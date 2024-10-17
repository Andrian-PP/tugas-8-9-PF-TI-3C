<div class="container">
     <div class="row mt-5">
          <div class="col-md-5">
          <div class="card">
               <div class="card-header">
               Ubah Data Pendeta
               </div>
               <div class="card-body">
                    <form action=""method="post">
                         <input type="hidden" name="id" value="<?=$pendeta['id']; ?>">
               <div class="form-group">
                    <label for="ntlp">Ntlp</label>
                    <input type="text" class="form-control" value="<?=$pendeta ['id'];?>" id="ntlp" name="ntlp">
                    <small class="form-text text-danger" ><?= form_error('ntlp')?></small>
               </div>
               <div class="form-group">
                    <label for="namapendeta">Nama Pendeta</label>
                    <input type="text" class="form-control"  value="<?=$pendeta ['namapendeta'];?> "id="namapendeta" name="namapendeta">
                    <small class="form-text text-danger" ><?= form_error('namapendeta')?></small>
               </div>
               <button type="submit" name="ubah" class="btn btn-primary float-end">Ubah</button>
               </form>
          </div>
     </div>
</div>