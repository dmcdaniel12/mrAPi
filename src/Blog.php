<?php

include 'Articles/Articles.php';

class Blog
{

  /**
   * Test GET call
   * @param int $articleID
   * @url article/([0-9]+)
   * @url article
   * @return string
   */
  public function getArticle($articleID = '')
  {
    // This needs to return all blogs
    $objArticle = new Articles();
    return $objArticle->getArticle($articleID);    
  }

  /**
   * Test POST call
   * @url article
   */
  public function postArticle()
  {
      $data = file_get_contents("php://input");
      $arrArticle = json_decode($data, true);
      
      // Could add validation here to validate all fields were sent in
      $objArticle = new Articles();
      $objArticle->createArticle($arrArticle);
      return true;
  }
  
  /**
   * @param int $articleID
   * @url article/([0-9]+)
   * @return boolean
   */
  public function putArticle($articleID = '')
  {
      $data = file_get_contents("php://input");
      $arrArticle = json_decode($data, true);

      $objArticle = new Articles();
      $objArticle->updateArticle($arrArticle,$articleID);
      return true;
  }
  
  /**
   * @param int $articleID
   * @url article/([0-9]+)
   * @return boolean
   */
  public function deleteArticle($articleID = '')
  {
      $objArticle = new Articles();
      $objArticle->deleteArticle($articleID);
      return true;
  }

}
