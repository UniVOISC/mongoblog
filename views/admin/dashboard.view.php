<div class="span1"> </div>
<div class="span10" id="post-admin">
    <h1>Dashboard</h1>
    <a href="index.php?status=create" class="btn btn-primary pull-right"><i class='fa fa-plus-circle'></i> Create Post</a>
    <table class="table table-striped" align="center">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Acci&oacute;n</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<!-- pagination -->
<div class="row">
    <div class="span12">
        <ul class="pager">
          <li>
              <!-- pagina anterior -->
          </li>
            <li lass="page-number"> <!-- pagina actual --></li>
          <li>
            <!-- siguiente pagina -->
        </li>
        </ul>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
        function confirmDelete(articleId) {

            var deleteArticle = confirm('Are you sure you want to delete this article?');

            if(deleteArticle){
                window.location.href = 'index.php?status=delete&id='+articleId;
            }
            return;
        }
    </script>
