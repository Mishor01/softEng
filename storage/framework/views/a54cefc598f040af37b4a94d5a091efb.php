

<?php $__env->startSection('main-content'); ?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-widget">
                            <div class="card-body gradient-3">
                                <div class="media">
                                    <div class="media-body">
                                        <h2 class="card-widget__title text-center">Admin Panel</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>



                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Messages</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Message</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Sadrina Rahman</td>
                                        <td>srahman@gmail.com</td>
                                        <td>January 22</td>
                                        <td class="color-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quod.</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Anika Tabassum</td>
                                        <td>anika01@gmail.com</td>
                                        <td>January 30</td>
                                        <td class="color-success">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quasi eligendi quod provident illo et. Autem corrupti deleniti nulla velit? Quae repudiandae ipsam minima sapiente.</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Sayma Sultana</td>
                                        <td>saymasultana@gmail.com</td>
                                        <td>January 25</td>
                                        <td class="color-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur, blanditiis quae animi quam molestiae.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Add People</div>
                        <div class="form-validation">
                            <form class="form-valide" action="#" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-firstname">First Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-firstname" name="val-firstname" placeholder="Enter First name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-lastname">Last Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-lastname" name="val-lastname" placeholder="Enter Lastname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">User Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-address">Address <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-address" name="val-address" placeholder="Enter Address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" id="val-email" name="val-email" placeholder="Enter Emalil">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Type <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="val-usertype" name="val-usertype">
                                            <option value="">Please select</option>
                                            <option value="admin">Admin</option>
                                            <option value="customer">Customer</option>
                                            <option value="homecooks">HomeCooks</option>                                            
                                        </select>
                                    </div>
                                </div>

            
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>








                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users Info</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Button</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mirza</td>
                                        <td>Abir</td>
                                        <td>Abir</td>
                                        <td>Banasree</td>                                                                               
                                        <td>abir@gamil.com</td>
                                        <td>1235</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Mahmudul</td>
                                        <td>Hasan</td>
                                        <td>Mhasan</td>
                                        <td>Uttora</td>                                                                               
                                        <td>mhassan@gamil.com</td>
                                        <td>456</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Fairuz</td>
                                        <td>Humaira</td>
                                        <td>fairuz</td>
                                        <td>MohammadPur</td>                                                                               
                                        <td>fairuz01@gamil.com</td>
                                        <td>1235</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>








                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Home Cooks Info</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Button</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mirza</td>
                                        <td>Abir</td>
                                        <td>Abir</td>
                                        <td>Banasree</td>                                                                               
                                        <td>abir@gamil.com</td>
                                        <td>1235</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Mahmudul</td>
                                        <td>Hasan</td>
                                        <td>Mhasan</td>
                                        <td>Uttora</td>                                                                               
                                        <td>mhassan@gamil.com</td>
                                        <td>456</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Fairuz</td>
                                        <td>Humaira</td>
                                        <td>fairuz</td>
                                        <td>MohammadPur</td>                                                                               
                                        <td>fairuz01@gamil.com</td>
                                        <td>1235</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Admin Info</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Button</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mirza</td>
                                        <td>Abir</td>
                                        <td>Abir</td>
                                        <td>Banasree</td>                                                                               
                                        <td>abir@gamil.com</td>
                                        <td>1235</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Mahmudul</td>
                                        <td>Hasan</td>
                                        <td>Mhasan</td>
                                        <td>Uttora</td>                                                                               
                                        <td>mhassan@gamil.com</td>
                                        <td>456</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td>Fairuz</td>
                                        <td>Humaira</td>
                                        <td>fairuz</td>
                                        <td>MohammadPur</td>                                                                               
                                        <td>fairuz01@gamil.com</td>
                                        <td>1235</td>
                                        <td><button type="button" class="btn mb-1 btn-outline-primary">Update</button> <button type="button" class="btn mb-1 btn-outline-danger">Delete</button>                                            
                                        </td>
                                        
                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>















            </div>

            </div>
                

                

                

                
        </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
<?php $__env->stopSection(); ?>

    <script>
        window.localStorage.clear();
        $(document).ready(function () {

$('#list-items').html(localStorage.getItem('listItems'));

$('.add-items').submit(function(event) 
{
event.preventDefault();

var item = $('#todo-list-item').val();
if(item) 
{
$('#list-items').append("<li><div class='round d-inline-block'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>" + item + "</label><a class='remove'><i class='fa fa-trash'></i></a></li>");




// <div class='round'><input type='checkbox' id='checkbox' /><label for='checkbox'></label></div><label for='checkbox'>

// dfdfdf</label>





localStorage.setItem('listItems', $('#list-items').html());

$('#todo-list-item').val("");
}

});

$(document).on('change', '.checkbox', function() 
{
if($(this).attr('checked')) 
{
$(this).removeAttr('checked');
} 
else 
{
$(this).attr('checked', 'checked');
}

$(this).parent().toggleClass('completed');

localStorage.setItem('listItems', $('#list-items').html());
});

$(document).on('click', '.remove', function() 
{
$(this).parent().remove();

localStorage.setItem('listItems', $('#list-items').html());
});

});
    </script>
</body>

</html>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Ghoroa_baburchi\resources\views/admin/admin.blade.php ENDPATH**/ ?>