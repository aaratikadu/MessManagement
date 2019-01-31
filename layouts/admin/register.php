<div class="row">
    <div class="card col m12 s12">
        <h3 class="head-title">Student Registraion</h3>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col  m6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" data-length="10" class="validate" name="name">
                        <label for="icon_prefix">Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="number" data-length="10" class="validate" name="mobile">
                        <label for="icon_telephone">Telephone</label>
                    </div>
                </div>

                <div class="row">           
                    <div class="input-field col m6 s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="text"  data-length="10" class="validate" name="email">
                        <label for="email">E-mail</label>
                    </div>         
                    <div class="input-field col m6 s12">
                    <input id="clgname" type="text"  data-length="10"  class="validate" name="college">
                    <label for="clgname">College Name</label>
                    </div>
                </div>

                 <div class="row">           
                    <div class="input-field col m6 s12">
                        <select id="branch">
                            <option value="" disabled selected>Branch</option>
                            <option value="1">Computer</option>
                            <option value="2">Electrical</option>
                            <option value="3">Civil </option>
                            <option value="4">machanical</option>
                            <option value="5">Instrumentation</option>
                            <option value="6">Electrinics</option>
                        </select>
                        <label for="branch">Select Branch</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <select id="studyYear">
                            <option value="" disabled selected>Year</option>
                            <option value="1">First Year</option>    
                            <option value="2">Last Year</option>
                            <option value="3">Trird Year</option>
                            <option value="4">Last Year</option>
                        </select>
                        <label for="studyYear">Select Year</label>
                    </div>
                </div>

             
                </div>

                 <div class="row">           
                    <div class="input-field col m12 s12">
                        <textarea id="laddress"  name="local_add" class="materialize-textarea"></textarea>
                        <label for="laddress">Local Address</label>
                    </div>
                </div>
                <div class="row">  
                    <div class="input-field col m12 s12">
                        <textarea id="paddress" name="per_add" class="materialize-textarea"></textarea>
                        <label for="paddress">Permanant Address</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m12 s12">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>