{template:templates.html}

{content}
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                {embed:embeds.latest_blog}
            </div>
            <div class="col-md-6 col-md-offset-1">
                <h2>Blog</h2>
                <?php if ($blog) : ?>
                <?php foreach($blog as $b) : ?>
                    <div class="pull-right">
                        <button class="btn btn-xs btn-info"
                            data-toggle="modal" data-target="#modal<?=$b['id']?>">Edit</button>
                        <a href="/<?=$b['id']?>/delete"
                            class="btn btn-xs btn-danger">Delete</a>
                    </div>
                    <h4><?=$b['title']?> <small> <?=date_format(date_create($b['date']), "d/m/Y")?></small></h4>
                    <p><?=$b['content']?></p>
                    <hr />

                    <div class="modal fade" id="modal<?=$b['id']?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="post" action="/<?=$b['id']?>/update" class="form-horizontal">
                                    <input type="hidden" name="id" value="<?=$b['id']?>">
                                    <div class="modal-body">
                                        <fieldset>
                                            <legend>Add Record</legend>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="title">Title</label>
                                                <div class="col-md-6">
                                                    <input name="title" type="text"
                                                        placeholder="title" class="form-control"
                                                        value="<?=$b['title']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="date">Date</label>
                                                <div class="col-md-6">
                                                    <input name="date" type="date"
                                                        placeholder="date" class="form-control"
                                                        value="<?=$b['date']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="content">Content</label>
                                                <div class="col-md-6">
                                                    <textarea class="form-control" name="content"
                                                    ><?=$b['content']?></textarea>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
                <hr />

                <form method="post" action="/store" class="form-horizontal">
                    <fieldset>
                        <legend>Add Record</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">Title</label>
                            <div class="col-md-6">
                                <input name="title" type="text"
                                    placeholder="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="date">Date</label>
                            <div class="col-md-6">
                                <input name="date" type="date"
                                    placeholder="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="content">Content</label>
                            <div class="col-md-6">
                                <textarea class="form-control" name="content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="save">Save</label>
                            <div class="col-md-6">
                               <button name="save" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
{/content}
