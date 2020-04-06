<?php include 'header.php';
?>
<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="lnr-picture text-danger">
                                        </i>
                                    </div>
                                    <div>Patient Personal Detail
                                        <div class="page-title-subheading">Please enter the detials if perviously enter see the table below. 
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>          
                          <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">NEW Patient Personal</h5>
                              <form action="livesearch.php" method="post" id="myForm">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip01">First name</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip02">Last name</label>
                                            <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltipUsername">Phone No </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">+92</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="3xxxxxxxxx" aria-describedby="validationTooltipUsernamePrepend" required>
                                                <div class="invalid-tooltip">
                                                    Please write valid phone number.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip03">Address</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="Address" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid Address.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip04">City</label>
                                            <input type="text" class="form-control" id="validationTooltip04" placeholder="City" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid City.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip05">CNIC</label>
                                            <input type="text" class="form-control" id="validationTooltip05" placeholder="CNIC" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid CNIC.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                        <select class="form-control-sm form-control">
                                                        <option>Small Select</option>
                                                    </select>



                                                </div>  <input type="submit" class="btn btn-success" id="addRow" value="Add New Row" onclick="addRow()" />
                                    </div>
                             
            
                              
                            </div>
                        </div></form>
                        

                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                 <div class="card-body" ><h5 class="card-title"> Enter test details  </h5>
                                 	 <p>
      								  <input type="button" class="btn btn-success" id="addRow" value="Add New Row" onclick="addRow()" />
    								</p>

    <!--THE CONTAINER WHERE WE'll ADD THE DYNAMIC TABLE-->
    					<div id="cont">
    					<table class="mb-0 table table-hover" id="empTable">
    					<tbody>
    					<tr>
    					<th>srno</th><th>Emp. Name</th><th>Designation</th><th>Age</th>
    					</tr>
    		
    			</tbody>
    </table></div>

    <p><input type="submit" class="btn btn-primary" value="Submit Data" onclick="myFunction()" /></p>
                                      
                                    </div>
                            </div>
                  </div>

                             
                          <div class="main-card mb-3 card">
                        	   
                            <div class="card-body">
                                 <div class="card-body"><h5 class="card-title">Perviously Enter Patients </h5>
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                    </div>  <?php
include 'footer.php';?>
<script>
    // ARRAY FOR HEADER.
    var arrHead = new Array();
    var i =0;
    arrHead = ['', 'Emp. Name', 'Designation', 'Age'];      // SIMPLY ADD OR REMOVE VALUES IN THE ARRAY FOR TABLE HEADERS.

    // FIRST CREATE A TABLE STRUCTURE BY ADDING A FEW HEADERS AND
    // ADD THE TABLE TO YOUR WEB PAGE.
    function createTable() {
    	if (i==0){
        var empTable = document.createElement('table');
        empTable.setAttribute('id', 'empTable'); 
        empTable.setAttribute('class', 'mb-0 table table-hover');           // SET THE TABLE ID.

        var tr = empTable.insertRow(-1);

        for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th');          // TABLE HEADER.
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
        }

        var div = document.getElementById('cont');
        div.appendChild(empTable); 
        addRow();
        i++;}   // ADD THE TABLE TO YOUR WEB PAGE.
    }

    // ADD A NEW ROW TO THE TABLE.s
    var countrow=0;
    function addRow() {
        var empTab = document.getElementById('empTable');

        var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
        var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
        tr = empTab.insertRow(rowCnt);

        for (var c = 0; c < arrHead.length; c++) {
            var td = document.createElement('td');          // TABLE DEFINITION.
            td = tr.insertCell(c);

            if (c == 0) {           // FIRST COLUMN.
                // ADD A BUTTON.
                var button = document.createElement('input');

                // SET INPUT ATTRIBUTE.
                button.setAttribute('type', 'button');button.setAttribute('class', 'btn-shadow dropdown-toggle btn btn-danger');
                button.setAttribute('value', 'Remove');

                // ADD THE BUTTON's 'onclick' EVENT.
                button.setAttribute('onclick', 'removeRow(this)');

                td.appendChild(button);
            }
            else {
                // CREATE AND ADD TEXTBOX IN EACH CELL.
                    var ele;var el2; var el3;
                 if (c==1) {
                ele = document.createElement('input');
                ele.setAttribute('type', 'text');
                ele.setAttribute('class', 'form-control card-body');
            	ele.setAttribute('Name', 'Name'+countrow);
            	ele.setAttribute('id', 'et'+countrow);
            	ele.setAttribute('onkeyup', 'showResult(this.value,'+countrow+')');
            	var div = document.createElement('div');
                div.id = "livesearch";
                div.setAttribute('class', 'col-md-6');
               
                document.getElementById("cont").appendChild(div);
                td.appendChild(ele);
            	}
            	 if (c==2) {
            	el2 = document.createElement('input');
                el2.setAttribute('type', 'text');
                el2.setAttribute('class', 'form-control card-body');
            	el2.setAttribute('name', 'Designation');
            	el2.setAttribute('id', 'Designation'+countrow);
                td.appendChild(el2);

            	}
                if (c==3) {
                el3 = document.createElement('input');
                el3.setAttribute('type', 'text');
                el3.setAttribute('class', 'form-control card-body');
                el3.setAttribute('onkeydown', 'enterfun()');
            	el3.setAttribute('name', 'value'+countrow);
            	el3.setAttribute('id', 'value'+countrow);
            	td.appendChild(el3);
            	countrow++;
            	}

                
                    
            }
        }
    }
    
    // DELETE TABLE ROW.
    function removeRow(oButton) {
        var empTab = document.getElementById('empTable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);  
           // BUTTON -> TD -> TR.
    }

    // EXTRACT AND SUBMIT TABLE DATA.
    function submit() {
        var myTab = document.getElementById('empTable');
        var values = new Array();

        // LOOP THROUGH EACH ROW OF THE TABLE.
        for (row = 1; row < myTab.rows.length - 1; row++) {
            for (c = 0; c < myTab.rows[row].cells.length; c++) {   // EACH CELL IN A ROW.

                var element = myTab.rows.item(row).cells[c];
                if (element.childNodes[0].getAttribute('type') == 'text') {
                    values.push("'" + element.childNodes[0].value + "'");
                }
            }
        }
        
        // SHOW THE RESULT IN THE CONSOLE WINDOW.
        console.log(values);
    }
    function enterfun()
    {
        
    if (event.which == 13 || event.keyCode == 13 || event.key === "Enter" ) {
        addRow();
        return false;
    }
    }
</script>
<script>
function showResult(str,countrow) {

  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";

    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str+"&y="+countrow,true);
  xmlhttp.send();
}
</script>
<script type="text/javascript">
	function clisk(idss,nam,prie,cout)
	{
	var nae1='et'+cout;
	document.getElementById(nae1).value=idss;
	document.getElementById('Designation'+cout).value=nam;
	document.getElementById('value'+cout).value=prie;
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
	}
</script>

<script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script>