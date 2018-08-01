<div class="col-md-12 text-center">
    <div class="well">
        <h4>Hotel Reviews</h4>
        <form method="post" action="addcomment.php">
            <div class="input-group">
                <input type="text" id="userComment" class="form-control input-sm chat-input" name="comment" placeholder="Write your message here..." />
                <span class="input-group-btn" onclick="addComment()">
                    <span class="glyphicon glyphicon-comment"></span><input type="submit" name="submit" class="btn btn-primary btn-sm" value="Add Comment"></span>
            </div>
        </form>
        <hr data-brackets-id="12673">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['rev_id'] = $row['review_id'];
            ?>
            <div class="comment-container">

            </div>
            <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                <strong class="pull-left primary-font"><?php echo $obj->getFullName() ?></strong>
                <small class="pull-right text-muted" style="margin-right: 50px">
                    <div class="row">
                        <form style="width: 50px;" method="post" action="delete.php">
                            <input type="hidden" name="rev_id" value="<?php echo $_SESSION['rev_id']; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" name="delete" value="delete" onclick="return confirm('Are you sure?');">
                        </form>
                    </div>
                    <div>
                        <a role="button" class="btn btn-info btn-sm" name="edit" style="margin-top: 5px">Edit</a>
                    </div>
                    <div class="row">
                        <span class="glyphicon glyphicon-time"></span><?php echo $row['date']; ?>
                    </div>
                </small>
                <br>
                </br>
                <li class="ui-state-default"><?php echo $row['comment']; ?>. </li>

                </br>
            </ul>
            <?php
        }
        ?>
    </div>
</div>





<div class="row" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <h2>My Reviews</h2>
            </div>
            <div class="row">
                <form class="form-group" method="post" action="addcomment.php">
                    <div class="col-md-10">
                        <input type="text" name="comment" class="form-control" placeholder="Enter Review" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="submit" class="btn btn-primary">Add Review</button>
                    </div>
                </form>
            </div>
            <div class="row" style="margin-top: 50px">
                <table class="table">
                    <thead>
                    <th>DATE</th>
                    <th>COMMENT</th>
                    <th>Delete</th>
                    <th>Edit</th>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $rev_id = $row['review_id'];
                        ?>
                        <tr>
                            <td class="col-md-3"><?php
                                $time = strtotime($row['date']);
                                $timeview = date('m/d/y g:i A', $time);
                                echo $timeview;
                                ?>
                            </td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><button  class="btn btn-info btn-sm">EDIT</button></td>
                            <td>
                                <form style="width: 50px;" method="post" action="delete.php">
                                    <input type="hidden" name="rev_id" value="<?php echo $rev_id; ?>">
                                    <button type="submit" name="delete" value="delete" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                                        DELETE
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function addComment(){
        var userComment = document.getElementById("userComment").value;
        document.getElementById("ui-state-default").innerHTML = userComment;
    }
</script>
</div>

<div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <form class="col-md-12" method="post" action="processlogin.php">
                    <div class="row">
                        <label>Account Number:</label>
                        <input type="text" class="form-control" name="accnum" required>
                    </div>
                    <br>
                    <div class="row">
                        <label>Pin:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <br>
                    <div class="row">
                        <input type="submit" name="login" class="btn btn-success btn-md" value="login">
                    </div>
                </form>
            </div>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>