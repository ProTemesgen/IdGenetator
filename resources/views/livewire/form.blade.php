<div class="m-4" >
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="card text-center" style="width: 48rem;">
                    <div class="card-header">
                        <b>Person Info</b>
                    </div>
                    <form action="" wire:submit.prevent = 'generate'>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label for=""><b>Chose Id Template</b></label>
                                    <input type="file" class='form-control'>

                                </div>
                                <div class="col">
                                        <div>
                                            <label for=""><b>Person Photo</b></label>
                                        </div>
                                        <!-- <div class='mb-2' style='border-style:solid; width:6rem; height:6.5rem; border-width:0.1rem; border-color:gray;'>
                                        </div> -->
                                    <input type="file" class='form-control' wire:model.lazy = 'photo'>
                                </div>
                                
                            </div>
                        </div>
                        <div class="container my-4 ">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class='form-control' placeholder='First Name' wire:model.lazy = 'Fname'>
                                </div>
                                <div class="col">
                                    <input type="text" class='form-control' placeholder='Midle Name' wire:model.lazy = 'Mname'>
                                </div>
                                <div class="col">
                                    <input type="text" class='form-control' placeholder='Last Name' wire:model.lazy = 'Lname'>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col">
                                    <input type="number" class='form-control' placeholder='Phone Number' wire:model.lazy = 'phone'>
                                </div>
                                <div class="col">
                                    <input type="text" class='form-control' placeholder='City' wire:model.lazy = 'city'>
                                </div>
                                <div class="col">
                                    <input type="text" class='form-control' placeholder='Sub City' wire:model.lazy = 'subCity'>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col">
                                    <input type="number" class='form-control' placeholder='Woreda' wire:model.lazy ='woreda'>
                                </div>
                                <div class="col">
                                    <input type="number" class='form-control' placeholder='House No' wire:model.lazy = 'houseNo'>
                                </div>
                                <div class="col">
                                    <select name="" id="" class='form-control' wire:model.lazy = 'role'>
                                        <option value="">-- Role --</option>
                                        <option value="student">Student</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="container d-flex flex-row-reverse">
                            <button type='submit' class='btn btn-primary mb-4' wire:click = 'generate'>GENETATE ID CARD</button>
                        </div>
                    </form>
                </div>
               
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    
</div>