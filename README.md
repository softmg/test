Test task
====

Test project pagination in foscommentsbundle

1. Integrate FosCommentBundle with Page Entity
2. Output comments on page
3. Override service FOS\CommentBundle\Entity\CommentManager.php
(method findCommentsByThread) to pagination by root comments (with depth = 0).
You need to display comments with depths > 0 too for coresponding root comments on current page
  
For test purpose you can use $_GET parameter in your service

4. Output pagination

5. In the output make patch
