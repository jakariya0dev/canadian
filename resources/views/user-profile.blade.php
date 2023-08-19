<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <table class="table table-bordered border-primary">
            <tr>
                <td>A. Personal Particulars (As in Passport)</td>
            </tr>
            <tr>
                <td>Name:</td>
                <td>{{ $user->name }}</td>
                <td>Sure Name:</td>
                <td>{{ $user->sure_name }}</td>
            </tr>
            <tr>
                <td>Previous/other Name if any:</td>
                <td>{{ $user->o_name }}</td>
            </tr>
            <tr>
                <td>Sex:</td>
                <td>{{ $user->gender }}</td>
                <td>Married Status:</td>
                <td>{{ $user->m_status }}</td>
            </tr>
            <tr>
                <td>Date of birth:</td>
                <td>{{ $user->dob }}</td>
                <td>Religion:</td>
                <td>{{ $user->religion }}</td>
            </tr>
            <tr>
                <td>City/Place of birth:</td>
                <td>{{ $user->pob }}</td>
                <td>Country of Birth:</td>
                <td>{{ $user->cob }}</td>
            </tr>
            <tr>
                <td>Citizenship /National ID No:</td>
                <td>{{ $user->nid }}</td>
                <td>Educational Qualification:</td>
                <td>{{ $user->education }}</td>
            </tr>
            <tr>
                <td>Visible Identification marks:</td>
                <td>{{ $user->visibility }}</td>
                <td>Current Nationality:</td>
                <td>{{ $user->c_nation }} ({{  $user->n_type }})</td>
            </tr>
            <tr>
                <td>Any Other Previous/ Past Nationality:</td>
                <td>{{ $user->o_nation }}</td>
            </tr>
            <tr>
                <td>B. Passport Details</td>
            </tr>
            <tr>
                <td>Passport No.:</td>
                <td>{{ $user->pass_no }}</td>
                <td>Date of issue ( dd/mm/yyyy ):</td>
                <td>{{ $user->pass_doi }}</td>
            </tr>
            <tr>
                <td Place of issue:</td>
                <td>{{ $user->pass_poi }}</td>
                <td>Date of expiry ( dd/mm/yyyy ):</td>
                <td>{{ $user->pass_doe }}</td>
            </tr>
            <tr>
                <td>Any other Passport/dentity Certificate held (if yes ,Please fill in the following</td>
            </tr>
            <tr>
                <td>Passport No.:</td>
                <td>{{ $user->op_no }}</td>
                <td>Date of issue ( dd/mm/yyyy ):</td>
                <td>{{ $user->op_doi }}</td>
            </tr>
            <tr>
                <td Place of issue:</td>
                <td>{{ $user->op_poi }}</td>
                <td>Date of expiry ( dd/mm/yyyy ):</td>
                <td>{{ $user->op_doe }}</td>
            </tr>
            <tr>
                <td>C. Applicant’s Contact Details</td>
            </tr>
            <tr>
                <td>Phone No:</td>
                <td>{{ $user->phone }}</td>
                <td>Mobile No:</td>
                <td>{{ $user->mobile }}</td>
                <td>Email:</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Present Address:</td>
                <td>{{ $user->pre_address }}</td>
                <td>Permanent Address:</td>
                <td>{{ $user->per_address }}</td>
            </tr>
            <tr>
                <td>D. Family Details</td>
            </tr>
            <tr>
                <td>Relation</td>
                <td>Name</td>
                <td>Nationality</td>
                <td>Prev. Nationality</td>
                <td>Place/Country of Birth</td>
            </tr>
            <tr>
                <td>Father</td>
                <td>{{ $user->f_name }}</td>
                <td>{{ $user->f_nation }}</td>
                <td>{{ $user->f_cob }}</td>
            </tr>
            <tr>
                <td>Mother</td>
                <td>{{ $user->m_name }}</td>
                <td>{{ $user->m_nation }}</td>
                <td>{{ $user->m_cob }}</td>
            </tr>
            <tr>
                <td>Spouse</td>
                <td>{{ $user->s_name }}</td>
                <td>{{ $user->s_nation }}</td>
                <td>{{ $user->s_cob }}</td>
            </tr>
            <tr>
                <td>E. Details of Visa Sought</td>
            </tr>
            <tr>
                <td>Type Of Visa Required:</td>
                <td>{{ $user->tov }}</td>
                <td>No of Entries:</td>
                <td>{{ $user->noe }}</td>
            </tr>
            <tr>
                <td>Period of Visa (Month):</td>
                <td>{{ $user->pov }}</td>
                <td>Expected Date of Journey:</td>
                <td>{{ $user->edoj }}</td>
            </tr>
            <tr>
                <td>Port Of Arrival:</td>
                <td>{{ $user->poa }}</td>
                <td>Port Of Exit:</td>
                <td>{{ $user->poe }}</td>
            </tr>

            <tr>
                <td>Status:</td>
                <td>{{ $user->status }}</td>
                <td>Password:</td>
                <td>{{ $user->password }}</td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>