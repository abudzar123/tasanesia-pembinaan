<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="sidebar.css" />
     <link rel="stylesheet" href="tasanesiaform.css" />
     <link rel="stylesheet" href="fontawesome/css/all.css"/>
     <link
       href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
       rel="stylesheet"
       integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
       crossorigin="anonymous"
     />
</head>

<body>

    <div class="container-fluid">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function () {
      $('#province').on('change', function () {
        var provinceID = $(this).val();
        if (provinceID) {
          $.ajax({
            url: '/getCities/' + provinceID,
            type: "GET",
            data: {
              "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function (data) {
              if (data) {
                $('#cityCourse').empty();
                $('#cityCourse').append('<option hidden>Choose City</option>');
                $.each(data, function (key, course) {
                  $('select[name="city_id"]').append('<option value="' + course.id + '">' + course.name +
                    '</option>');
                });
              } else {
                $('#course').empty();
              }
            }
          });
        } else {
          $('#course').empty();
        }
      });
    });
  </script>

<script>
    $(document).ready(function () {
      $('#cityCourse').on('change', function () {
        var cityID = $(this).val();
        if (cityID) {
          $.ajax({
            url: '/getDistricts/' + cityID,
            type: "GET",
            data: {
              "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function (data) {
              if (data) {
                $('#districtCourse').empty();
                $('#districtCourse').append('<option hidden>Choose District</option>');
                $.each(data, function (key, course) {
                  $('select[name="district_id"]').append('<option value="' + course.id + '">' + course.name +
                    '</option>');
                });
              } else {
                $('#course').empty();
              }
            }
          });
        } else {
          $('#course').empty();
        }
      });
    });
  </script>

</body>

</html>