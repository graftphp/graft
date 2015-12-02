{template:templates.html}

{content}
    <div class="container">
        <h2>Blog</h2>
        <?php foreach($blog as $b) : ?>
            <h4><?=$b['title']?> <small><?=$b['date']?></small></h4>
            <p><?=$b['content']?></p>
            <hr />
        <?php endforeach; ?>
        <hr />

        <form method="post" action="/store" class="form-horizontal">

            <fieldset>
                <legend>Add Record</legend>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="title">Title</label>  
                    <div class="col-md-4">
                        <input name="title" type="text" 
                            placeholder="title" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="date">Date</label>  
                    <div class="col-md-4">
                        <input name="date" type="date" 
                            placeholder="date" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="content">Content</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="save">Save</label>
                    <div class="col-md-4">
                       <button name="save" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </fieldset>

        </form>
    </div>
{/content}