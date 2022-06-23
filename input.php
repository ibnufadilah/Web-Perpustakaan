 <form action="proses_input.php" method="post" class="col-ms-11">
              <div class="form-group">
                <label for="no_surat">No Buku:</label>
                <input type="text" class="form-control" id="no_surat" name="no_buku">
              </div>
              <div class="form-group">
                <label for="tgl_surat">Tanggal Penerima :</label>
                <input type="text" class="form-control" id="tgl_surat">
              </div>
              <div class="form-group">
                <label for="perihal">No Inventaris :</label>
                <input type="perihal" class="form-control" id="perihal">
              </div>
              <div class="form-group">
                <label for="lampiran">Judul :</label>
                <input type="text" class="form-control" id="lampiran">
              </div>
              <div class="form-group">
                <label for="pengirim">Pengarang :</label>
                <input type="text" class="form-control" id="pengirim">
              </div>
              <div class="form-group">
                <label for="dituju">Penerbit :</label>
                <input type="email" class="form-control" id="dituju">
              </div>
              <div class="form-group">
                <label for="dituju">Jumlah :</label>
                <input type="email" class="form-control" id="dituju">
              </div>
               <div class="form-group">
                <label for="jenis">Jenis :</label>
                <select id="jenis" class="form-control form-control-sm" name="jenis">
                  <option selected>Pilih salah satu</option>
                  <option selected>Non Fiksi</option>
                  <option selected>Fiksi</option>
                  <option selected>Referensi</option>
                </select>
                </div>
                <div class="form-group">
                <label for="bahasa">Bahasa :</label>
                <select id="bahasa" class="form-control form-control-sm" name="bahasa">
                  <option selected>Pilih salah satu</option>
                  <option selected>Indonesia</option>
                  <option selected>Inggris</option>
                  <option selected>Dan Lain-lain</option>
                </select>
                </div>
                <div class="form-group">
                <label for="asal">Asal :</label>
                <select id="asal" class="form-control form-control-sm" name="asal">
                  <option selected>Pilih salah satu</option>
                  <option selected>Pembelian</option>
                  <option selected>Denda</option>
                  <option selected>Sumbangan</option>
                </select>
                </div>
              <div class="form-group">
                <label for="dituju">Keterangan :</label>
                <input type="email" class="form-control" id="dituju">
              </div>

          
              
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>