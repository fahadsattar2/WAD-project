function UserTable()
{
    closeNav();
    var body = document.getElementById("mainBody");
    body.innerHTML = "<thead>"+
        "<tr>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\"><a>New</a></th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Counter</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Username</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Email</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Password</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Rating</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Skills</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Edit</th>"+
        "<th class=\"col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1\">Delete</th>"+
        "</tr>"+
        "</thead>";
}