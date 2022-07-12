<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap-5.1.3-dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&family=Montserrat:wght@500&family=Poppins:wght@700&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Employment Management System</title>

<style>

*, *:before, *:after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    width: 100%;
    height: 80vh;
    display: relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #F9F9F3;
    font-family: 'Roboto', sans-serif;

}
.right-navbar a{
    font-weight: bold;
    display: block;
    float: right;
    margin-top: 12px;
    width: 80px;
    height: 36px;
    font-size: 12px;
    font-family: 'Montserrat', sans-serif;
    background: none;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 1px;
    text-decoration: none;

}
.datetime{

    margin: 3px;
    padding: 6px;
}
.date{

    font-size: 20px;
    font-weight: 600px;
    font-family: 'Montserrat', sans-serif;
}
.time{
    font-size: 25px;
    display: flex;
    font-family: 'Montserrat', sans-serif;
}
.time span:not(:last-child){
    margin: 0 2px;
    font-weight: 600px;
    
}
.time span:last-child{
    font-size: 18px;
    font-weight: 500px;
    text-transform: uppercase;
    margin-top: 7px;
    padding: 0 3px;
}
.bttn{
    float: right;
    border-style: none;
    background: #333333;
    display: block;
    color: white;
    cursor: pointer;
    margin-top: 80px;
    width: 90px;
    height: 38px;
    border-radius: 4px;
    font-size: 13px;
    font-family: 'Montserrat', sans-serif;
    padding-left: 2px;
}
.bttn:hover{
    background: #191919;
}
.bttn .fa-user-plus{
    font-size: 16px;
}
.btnn{
    border-style: none;
    background: #333333;
    display: block;
    color: white;
    cursor: pointer;
    margin: 12px;
    width: 115px;
    height: 39px;
    border-radius: 4px;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
}
.btnn:hover{
    background: #191919;
}

label{
    font-family: 'Montserrat', sans-serif; 
}
input{
    height: 33px;
    font-size: 13px;
    margin-bottom: 15px;
    font-family: 'Roboto', sans-serif;
}
input[type=text]:focus{
    border-color: black;
    box-shadow: 0 0 5px 0 gray;
   
}
input[type=email]:focus{
    border-color: black;
    box-shadow: 0 0 5px 0 gray;
    
}
select{
    height: 33px;
    margin-bottom: 15px;
}
select[type=choice]:focus{
    border-color: black;
    box-shadow: 0 0 5px 0 gray;
}
input[type=date]:focus{
    border-color: black;
    box-shadow: 0 0 5px 0 gray;
}
.btt{
    border-style: none;
    background: #DD0000;
    display: block;
    color: white;
    cursor: pointer;
    margin: 12px;
    width: 110px;
    height: 40px;
    border-radius: 4px;
    font-size: 13px;
    font-family: 'Montserrat', sans-serif;
}
.btt:hover{
    background: #BB0000;

}
.bt{
    border-style: none;
    display: block;
    color: white;
    cursor: pointer;
    width: 125px;
    height: 38px;
    border-radius: 4px;
    background: #333333;
    text-decoration: none;
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;


}
.bt:hover{
    background: #191919;

}
input[type=txt]{
  width: 130px;
  height: 38px;
  margin-top: 80px;
  border: none;
  border-radius: 18px;
  font-size: 15px;
  background-color: #ececec;
  outline: none;
  padding-left: 38px;
  transition: width 0.4s ease-in-out;

}
input[type=txt]:focus{
    width: 20%;
    background-color: white;
    box-shadow: 0 0 10px 0 gray;
    
}
.fa-search{
    position: absolute;
    transform: translateY(-50%);
    left: 148px;
    margin-top: 98px;
}
</style>
</head>
<body onload="initClock()">

        <!--LOGOUT-->
        <div class="container">
        <div class="right-navbar">
            <a style="color:black"; href="<?=site_url('main/logout'); ?>">Logout</a>
            <!--LOGOUT-->

                <!--Digital Clock-->   
        <div class="container">
        <div class="datetime">
            <div class="date">
                <span id="dayname">Day</span>,
                <span id="month">Month</span>
                <span id="daynum">00</span>,
                <span id="year">Year</span>
            </div>
            <div class="time">
                <span id="hour">00</span>:
                <span id="minutes">00</span>:
                <span id="seconds">00</span>
                <span id="period">AM</span>
            </div>
            </div> 
        </div>
        <!--Digital Clock-->

        <!--DigitalClock Script-->
        <script type="text/javascript">
            function updateClock(){
                var now = new Date();
                var dname = now.getDay(),
                    mo = now.getMonth(),
                    dnum = now.getDate(),
                    yr = now.getFullYear(),
                    hou = now.getHours(),
                    min = now.getMinutes(),
                    sec = now.getSeconds(),
                    pe = "AM";


                    if(hou == 0){
                        hou = 12;
                    }
                    if(hou > 12){
                        hou = hou -12;
                        pe = "PM";
                    }

                    Number.prototype.pad = function(digits){
                        for(var n = this.toString(); n.length < digits; n = 0 + n);
                        return n;
                    }

                    var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                    var week = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                    var ids = ["dayname","month","daynum","year","hour","minutes","seconds","period"];
                    var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
                    for(var i = 0; i < ids.length; i++)
                    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
            }

            function initClock(){
                updateClock();
                window.setInterval("updateClock()", 1);
            }
        </script>
        </div>
             <!--DigitalClock Script-->
             
        <!--TABLE-->
        <div class="container">   
            <input type="txt" name="search" placeholder="Search">
            <i class="fas fa-search" style="color:#A9A9B0"></i>
        <button type="button" class="bttn mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <span class="fas fa-user-plus"></span>
            Create
        </button>
       <table class="table table-bordered table-hover" id="EmployeeTbl">
           <tr>
               <th class="d-none">Id</th>
               <th>ID No.</th>
               <th>Fullname</th>
               <th>Department</th>
               <th>Gender</th>
               <th>Date of Birth</th>
               <th>Email</th>
               <th>Date Joined</th>
               <th>Date Resign</th>
               <th></th>
               <th></th>

           </tr>
           <?php foreach($employee as $employee_list): ?>
            <tr>
                <td class="d-none"><?= esc($employee_list['id']) ?></td>
                <td><?= esc($employee_list['no']) ?></td>
                <td><?= esc($employee_list['fullname']) ?></td>
                <td><?= esc($employee_list['department']) ?></td>
                <td><?= esc($employee_list['gender']) ?></td>
                <td><?= esc($employee_list['dob']) ?></td>
                <td><?= esc($employee_list['email']) ?></td>
                <td><?= esc($employee_list['datejoined']) ?></td>
                <td><?= esc($employee_list['dateresign']) ?></td>
                <td><i class="fas fa-edit btnUpdateEmployee" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#updateEmployee"></i></td>
                <td><i class="fas fa-trash-alt btndeleteEmployee" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#deleteEmployee"></i></td>
            </tr>
            <?php endforeach ?>
       </table>
    
       <!--Update Table-->
       <div class="modal fade" id="updateEmployee">
  <div class="modal-dialog">
    <div class="modal-content">

    <form action="<?= base_url('admin/update_employee') ?>" method="post" class="p-2">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="form-group d-none">
                    <label for="id">Id</label>
                    <input type="hidden" class="form-control employId" name="id">
                </div>
                <div class="form-group col-md-5">
                    <label for="details">ID No.</label>
                    <input type="text" readonly class="form-control iden" name="no">
                </div>
                <div class="form-group">
                    <label for="details">Fullname</label>
                    <input type="text" class="form-control fname" name="fullname">
                </div>
                <div class="form-group col-md-5">
                        <label for="details">Department</label>
                            <select id="inputState" class="form-control dept" type="choice" name="department">
                            <option selected>Accounting and Finance</option>
                                <option>Human Resource Management</option>
                                <option>Marketing and Sales</option>
                                <option>IT</option>
                            </select>
                </div>
                <div class="form-group col-md-5">
                        <label for="details">Gender</label>
                            <select id="" class="form-control gndr" type="choice" name="gender">
                                <option selected>Male</option>
                                <option>Female</option>
                            </select>
                </div>
                <div class="form-group">
                    <label for="details">Date of Birth</label>
                    <input type="date" class="form-control dofb" name="dob">
                </div>
                <div class="form-group">
                    <label for="details">Email</label>
                    <input type="email" class="form-control eml" name="email">
                </div>
                <div class="form-group">
                    <label for="details">Date Joined</label>
                    <input type="date" class="form-control dofj" name="datejoined">
                </div>
                <div class="form-group">
                    <label for="details">Date Resign</label>
                    <input type="date" class="form-control dor" name="dateresign">
                </div>

      <div class="modal-footer"> 
        <button type="submit" class="bt">Save changes</button>
        </div>
      </div>
      </form>

    </div>
  </div>
</div>

       <!-- Update Table End -->

       <!--Delete Table-->
       <div class="modal fade" id="deleteEmployee">
  <div class="modal-dialog">
    <div class="modal-content">

    <form action="<?= base_url('admin/delete_employee') ?>" method="post" class="p-2">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="form-group d-none">
                <label for="">Id</label>
                <input type="hidden" class="form-control delEmployId" name="id">
                </div>
                <p>Are you sure you want to permanently delete <strong><span class="delFname"></span></strong></p>
      </div>
                <div class="modal-footer"> 
            <button type="submit" class="btt">Continue</button>
      </div>
      </form>

    </div>
  </div>
</div>

        <!--Delete Table-->
<!-- Add Modal -->
<div class="modal fade" id="staticBackdrop">
  <div class="modal-dialog">
    <div class="modal-content">

    <form action="<?= base_url('admin/add_new_employee') ?>" method="post" class="p-2">

      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="form-group col-md-5">
                    <label for="details">ID No.</label>
                    <input type="text" class="form-control" name="no">
                </div>
                <div class="form-group">
                    <label for="details">Fullname</label>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div class="form-group col-md-5">
                        <label for="details">Department</label>
                            <select id="inputState" class="form-control" type="choice" name="department">
                                <option selected>Accounting and Finance</option>
                                <option>Human Resource Management</option>
                                <option>Marketing and Sales</option>
                                <option>IT</option>
                            </select>
                </div>
                <div class="form-group col-md-5">
                        <label for="details">Gender</label>
                            <select id="" class="form-control" type="choice" name="gender">
                                <option selected>Male</option>
                                <option>Female</option>
                            </select>
                </div>
                <div class="form-group">
                    <label for="details">Date of Birth</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="form-group">
                    <label for="details">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="details">Date Joined</label>
                    <input type="date" class="form-control" name="datejoined">
                </div>
                <div class="form-group">
                    <label for="details">Date Resign</label>
                    <input type="date" class="form-control" name="dateresign">
                </div>

      <div class="modal-footer"> 
        <button type="submit" class="btnn">Add to table</button>
        </div>
      </div>
      </form>

    </div>
  </div>
</div>
</body>

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="<?= base_url('bootstrap-5.1.3-dist/js/bootstrap.min.js')?>"></script>

<script>
    $(document).ready(function(){
        $("#EmployeeTbl").on('click', '.btnUpdateEmployee', function(){
            let currentRow = $(this).closest("tr");

            let employId = currentRow.find("td:eq(0)").text();
            let iden = currentRow.find("td:eq(1)").text();
            let fname = currentRow.find("td:eq(2)").text();
            let dept = currentRow.find("td:eq(3)").text();
            let gndr = currentRow.find("td:eq(4)").text();
            let dofb = currentRow.find("td:eq(5)").text();
            let eml = currentRow.find("td:eq(6)").text();
            let dofj = currentRow.find("td:eq(7)").text();
            let dor = currentRow.find("td:eq(8)").text();
 
            $(".employId").val(employId);
            $(".iden").val(iden);
            $(".fname").val(fname);
            $(".dept").val(dept);
            $(".gndr").val(gndr);
            $(".dofb").val(dofb);
            $(".eml").val(eml);
            $(".dofj").val(dofj);
            $(".dor").val(dor);
        });

        $("#EmployeeTbl").on('click', '.btndeleteEmployee', function(){
            let currentRow = $(this).closest("tr");

            let employId = currentRow.find("td:eq(0)").text();
            let fname = currentRow.find("td:eq(2)").text();



            $(".delEmployId").val(employId);
            $(".delFname").text(fname);
        });
    });
</script>
</html>