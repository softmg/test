Test task
====

Test project pagination in foscommentsbundle

1. Integrate FosCommentBundle with Page Entity
2. Output comments on page
3. Override service FOS\CommentBundle\Entity\CommentManager.php
(method findCommentsByThread) to pagination by root comments (with depth = 0)

4. Override part of fos comments.js (part of used code for example)

```js
FOS_COMMENT.thread_container.on('click',
                '.fos_comment_comment_reply_show_form',
                function(e) {
    ...
                    var container_in = parent.find('> .fos_comment_comment_reply');
    ...

                    FOS_COMMENT.get(
                        form_data.url,
                        {parentId: form_data.parentId},
                        function(data) {
    ...      
                            container_in.addClass('fos_comment_replying');
                            container_in.html(data);
    ...                        
                        }
                    );
                }
            );
```

5. In the output make patch
