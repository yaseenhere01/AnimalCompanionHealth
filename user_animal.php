<?php
include('./user_navbar.php');
include('./user_header.php');
include('./db_conn.php');
?>

<style>
    .contactbg::before {
        content: "";
        /* background: url("./images/background 6.jpg"); */
        background-color: #2d3b38;
        height: 312%;
        width: 100%;
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
      
        backdrop-filter: blur(150px);

    }

    @media(max-width:992px) {

        .container,
        .container-sm,
        .container-md {
            max-width: 898px;
        }

        .mt-5,
        .my-5 {
            margin-top: 2rem !important;
        }

        .mb-5,
        .my-5 {
            margin-bottom: 1rem !important;
        }
    }

    @media(max-width:879px){
        .card-body {
        padding: 0.25rem;
}
    }


.container,
.container-sm,
.container-md {
    max-width: 1098px;
}

.mt-5,
.my-5 {
    margin-top: 1.5rem !important;
    font-size: 1rem;
}

.mb-5,
.my-5 {
    margin-bottom: 1rem !important;
}

        /* .tabless{
                padding-right: var(--bs-gutter-x,26.99rem);
        } */


        table {
            margin: 0px auto;

        }

        @media (max-width: 767px) {
            .tabless {
                padding-right: var(--bs-gutter-x, 30.99rem);
                margin-left: 0px;
            }




        }

        @media (min-width: 576px) {

            .container,
            .container-sm {
                max-width: 1000px;
            }
        }


        @media (max-width: 485px) {
            .table {
                width: 400px;
            }

            .hd {
                font-size: 12px;
            }

            td {
                font-size: 13px;
            }


        }

        @media (max-width: 425px) {
            .table {
                width: 300px;
                /* padding: 0px auto; */

            }

            .hd {
                font-size: 12px;
            }

            td {
                font-size: 13px;
            }


        }

        @media (max-width: 395px) {
            .table {
                width: 30px;
                /* overflow-x: auto; */
                /* padding: 0px auto; */
                padding-right: 900px;
                margin-right: 900px;


            }

            .hd {
                font-size: 12px;
            }

            td {
                font-size: 13px;
            }


        }

        @media (max-width: 375px) {
            .tabless {
                padding-right: var(--bs-gutter-x, 24.20rem);
            }

            .table {
                width: 10px;
                height: 9px;
                /* overflow-x: auto; */
                /* padding: 0px auto; */
                margin-right: 100px;

            }

            .hd {
                font-size: 12px;
            }

            td {
                font-size: 13px;
            }


        }




</style>

<!-- <div class="my-5" style="margin-left: 1130px;">
    <button data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-primary d-flex justify-content-between align-items-center">Feedback</button>
</div> -->


<!-- Table created -->
<div class="container my-5 text-light">
<div class="contactbg">
    <div>
        <input style="background-color: rgba(128, 128, 128, 0.322);" class="form-control my-5 text-light" id="inp" type="text" placeholder="Search Here">

    </div>
    <div style="background-color: rgba(128, 128, 128, 0.322);" class="card">
        <div  class="card-header">
            <div class="card-title">ANIMALS LIST</div>


        </div>

    </div>



    <div class="card-body">
    <div class="table-responsive">

    <table class="table">
  <thead>
  <tr class="text-light">
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DISEASE</th>
                    <th scope="col">SYMPTOMS</th>
                    <th scope="col">TREATMENT</th>
                    <th scope="col">PROCESS</th>
                    <th scope="col">DOCTORS</th>

                </tr>
  </thead>
  <!-- <style>
    body{
        background-color: ;
    }
  </style> -->
            <tbody class="text-light">
                <?php
                include('./db_conn.php');
                $query = "SELECT * FROM `animal`";
                $result = mysqli_query($con, $query);
                if (!$result) {
                    die("Query failed");
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[disease]</td>
                        <td>$row[symptoms]</td>
                        <td>$row[treatment]</td>
                        <td>$row[process]</td>
                        <td>$row[doctor]</td>
                       
                    </tr>";
                    }
                }
                ?>


            </tbody>
        </table>



    </div>
    </div>
</div>
</div>




<?php
include('./user_footer.php');
?>

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $("#inp").on("keyup", function() {
            let inp = $("#inp").val().toUpperCase();
            $("table tbody tr").filter(function() {
                $(this).toggle($(this).text().toUpperCase().indexOf(inp) > -1)
            })

        })

    })
</script>


<!-- INSERT INTO `animal` (`id`, `name`, `disease`, `symptoms`, `treatment`, `process`, `doctor`) VALUES (NULL, 'Popat', 'virus', 'virus', 'virus', 'virus', 'mushtaq'); -->