<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blood</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="../../assets/images/icon1.png"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/animate.css" />
    <link rel="stylesheet" href="../../assets/css/lineicons.css" />
    <link rel="stylesheet" href="../../assets/css/ud-styles.css" />

  </head>
  <body >
  <h3 class="text-center">التبرع لاحدى طلبات احتياجات الدم الحالية</h3>
    <?php
    include '../../auth/is_donor.php';
    include '../../auth/alert.php';
    
if(isset($_SESSION['donation_id']))
{
  unset($_SESSION['donation_id']);
}

    ?>
    <section class="ud-blog-grids">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=1">
                  <img src="../../assets/images/bloodtype/ap.png"   style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                  <?php
                    include("../../bloodbydon/ap.php");
                    echo $_SESSION['ap'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=1">
                  A+
                  </a>
                </h3>
                <p class="ud-blog-desc">
                صفات أصحاب فصيلة الدم a+ من يحملون فصيلة الدم A يشتركون في كثير من الأحيان بصفات عامة بينهم، كما يشترك من يحملون هذه الفصيلة في خصائص الجهاز الهضمي حيث نجد أن الجهاز الهضمي لديهم ضعيفًا وحساسًا للغاية. كما أنهم يعانون من ضعف المناعة، مما يجعلهم عرضة أكثر للإصابة ببعض الأمراض الطفيلية، والميكروبية، والفيروسية.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=2">
                  <img src="../../assets/images/bloodtype/am.png" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/am.php");
                    echo $_SESSION['am'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=2">
                  A-
                  </a>
                </h3>
                <p class="ud-blog-desc">
                تتميز فصيلة دم A بأنها تتمتع بدرجة تنظيم عالية، والاهتمام بالتفاصيل، ومحاولة الوصول للكمال، وتتصف أيضاً أنها هادئة وخجولة إلى حد ما، مثل الاستماع ومتابعة المحادثات بدلاً من قيادة الحديث، وحساسة، وتأخذ جميع الأمور على محمل الجد. تتميز شخصية فصيلة B، بالصراحة، ويقولون ما يفكرون به، ويتذكرون بعض الأشياء التى تهمهم
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=3">
                <img src="../../assets/images/bloodtype/bp.png" style="max-height: 300px; max-width: 300px;" alt="blog" />

                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/bp.php");
                    echo $_SESSION['bp'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=3">
                    B+
                  </a>
                </h3>
                <p class="ud-blog-desc">
                فصيلة الدم b+من فصائل الدم النادرة والتي تتميز بأن لها الكثير من الخصائص التي تميزها عن غيرها من فصائل الدم الأخرى، فأصحاب هذه الفصيلة يتمتعون بصحة جيدة نتيجة عدة عوامل وخصائص، ومن خلال هذا التقرير سوف نتعرف على مزيد من المعلومات عن فصيلة الدم +B
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=4">
                <img src="../../assets/images/bloodtype/bm.png" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/bm.php");
                    echo $_SESSION['bm'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=4">
                    B-
                  </a>
                </h3>
                <p class="ud-blog-desc">
                استقبال الدم من فئة B- أو O- فقط، وإعطاء الدم لفئة B- فقط. 
ندرة وجودها، حيث إنّ (1.5 – 2%) من سكان الأرض يحملون هذه الفئة فقط، أي ما يعادل شخصين من كلّ (70-100) شخص. 



                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=5">
                <img src="../../assets/images/bloodtype/op.png" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/op.php");
                    echo $_SESSION['op'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=5">
                    O+
                  </a>
                </h3>
                <p class="ud-blog-desc">
                زمرة الدم o+ هي الأكثر انتشاراً بين البشر، فهي تكون لدى حوالي 39% من الأشخاص، وهي الفصيلة الوحيدة التي يستطيع أصحابها التبرع بالدم لأشخاص آخرين من كافة فصائل الدم الأخرى، وعلى الرغم من ذلك لا تستقبل الدم سوى من الأشخاص الذين يحملون زمرة الدم o+ أو o-، خلال هذا المقال سوف نتحدث عن أهمية فصيلة الدم o+ وأهميتها والمخاطر                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=6">
                <img src="../../assets/images/bloodtype/oom.png" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/om.php");
                    echo $_SESSION['om'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=6">
                    O-
                  </a>
                </h3>
                <p class="ud-blog-desc">
                في معظم الحالات فصيلة الدم O السالب يمكن أن تعطى بأمان لأي شخص، وغالباً ما يستخدم في حالات الطوارئ الطبية على الفور عندما لا يعرف فصيلة الدم، إذ تعبر آمنة بالنسبة لمعظم المستقبلين لأنه ليس لديها أي مولدات لمضاد فصيلتي الدم A، B أو RHD على سطح الخلايا، ومتوافقة مع كل فصائل الدم الأخرى.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=7">
                <img src="../../assets/images/bloodtype/abp.png" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/abp.php");
                    echo $_SESSION['abp'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=7">
                   AB+
                  </a>
                </h3>
                <p class="ud-blog-desc">
                تعتبر فصيلة دم +AB مستقبل عام، أي أنّ الذي يحملها يستطيع أخذ الدم من جميع أنواع الفصائل الأخرى (AB+، AB-، A+، A-، B+، B-، O+، O) في حال احتاج إلى نقل دم من شخص آخر، وهذا يعني أنّ فصيلة دم +AB هي من فصائل الدم الأقل صعوبة لعمليات نقل الدم.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="ud-single-blog">
              <div class="ud-blog-image">
              <a href="view_patient.php?blood_type=8">
                <img src="../../assets/images/bloodtype/abm.png" style="max-height: 300px; max-width: 300px;" alt="blog" />
                </a>
              </div>
              <div class="ud-blog-content">
                <span class="ud-blog-date">
                <?php
                    include("../../bloodbydon/abm.php");
                    echo $_SESSION['abm'];
                  ?>
                </span>
                <h3 class="ud-blog-title">
                <a href="view_patient.php?blood_type=8">
                   AB-
                  </a>
                </h3>
                <p class="ud-blog-desc">
                تعد فصيلة دم -AB سالب هي أندر فصيلة دم من ضمن فصائل الدم الثمانية التي سيرد ذكرها لاحقًا، إذ أن فقط 1% من الأشخاص عالميًا يمتلكون هذه الفصيلة. ولحسن الحظ لا يوجد هناك العديد من الأشخاص الذين يمتلكون هذه الفصيلة وبالتالي ليس هناك خطر كبير لعدم وجود عدد كافٍ من المتبرعين.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>

