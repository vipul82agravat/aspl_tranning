            1.BLOB data type example

                -This is where the MySQL BLOB data type comes in. This programming approach eliminates the need for creating a separate file system for storing images.

                 ALTER TABLE student_work
                            ADD COLUMN work_image BLOB;

                             UPDATE student_work SET work_image = 'https://i.imgur.com/UYcHkKD.png'
                                            WHERE id = 1;



            2.MySQL Regexps example and prectice

                SELECT * FROM `employee_registration` WHERE email REGEXP '^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$';
                SELECT * FROM `employee_registration` WHERE email REGEXP '^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$';

                -> first and last for word upper case

                -> all uppercase

                    $regex_upper = "/[A-Z]+/";

                -> lower case
                    $regex_upper = "/[a-z]+/";

                -> only number VALUE

                    $regex_upper = "/[0-9]+/";

               -> Regexps date serach

                    $date="2012-09-12";
                    $re="/^[0-9]{4}-(0[1-9]|1[1-9])-(0[1-9]|[1-2][0-9]|3[0-1])$/";

                -> email serach

                    $res="/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";

                -> all are not avaliable in list for above point
                    $regex = "/[^A-Z]+/";
                     $regex_upper = "/[^a-z]+/";
                     $regex_upper = "/[^0-9]+/";

                      $re="/^[^0-9]{4}-(0[1-9]|1[1-9])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
                      $res="/^([^a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";



                -> add 5  line recrods inside the start work of all pagrafe


                -> using class for filter data


                -> check in systnax
                         preg_match('/([:alpha:]+)\s+\1/', 'Paris in the the spring', $m);

                -> string,number pattren  in sigle recrods  ex abc1234


                -> occrrance count check how manay to number
                    1348023 check

                        $pattern="/[0-9]/";
                        preg_match_all($pattern, $str, $matches);
                        $thisCount=count($matches[0]);
                        print_r($thisCount);
                        echo "<br>";


                -concat with regexp filter if possible

                            yes


                -left side single cahr fine copy
                -(RND....)

            3.DISTINCT with multiple field list

                - SELECT DISTINCT id,work_name,work_status FROM `student_work` GROUP BY (work_name);

                - SELECT id,work_name,work_status FROM `student_work` GROUP BY (work_name);

                 References links https://www.navicat.com/en/company/aboutus/blog/1647-applying-select-distinct-to-one-column-only




            4.Full text index example


                    ->Full-text indexes can be created only for VARCHAR, CHAR, or TEXT columns.

                    -Querying a set of columns with MATCH (col1, col2, ..)
                    -The query and the search modifier to be used against these columns with AGAINST (query [search_modifier])

                     - A natural language search type – such a search mode interprets the search string as a literal phrase. Enabled by default if no modifier is specified or when the IN NATURAL LANGUAGE MODE modifier is specified;

                     -A query expansion search type – such a search mode performs the search twice. When searching the second time, the result set includes a few most relevant documents from the first search. Enabled using the WITH QUERY EXPANSION modifier;

                    Syantx

                        SELECT * FROM table WHERE MATCH(column) AGAINST(“string” IN NATURAL LANGUAGE MODE);

                    =>Natural Language Full-Text Searches

                        -Natural language full-text search interprets the search string as a free text (in the human language) and no special operators are required.

                         SELECT * FROM table WHERE MATCH(column) AGAINST(“string” IN NATURAL LANGUAGE MODE);

                         The number of words in the row
                        The number of unique words in that row
                        The total number of words in the collection
                        The number of documents (rows) that contain a particular word.

                    =>Boolean Searches

                        -A boolean search interprets the search string using the rules of a special query language
                        -The query can contain words to search for, along with special operators that modify how the search results must appear; operators that check if the word must be present or absent in the matching row, or determines the weightage of the given word.
                        -We use BOOLEAN MODE in MySQL to enable boolean full-text searches. The special operators are placed at the beginning or end of the words. A leading + denotes that a word must be present in the row, whereas a leading - denotes that it should not be present in the row.


                        SELECT * FROM table WHERE MATCH(column) AGAINST(“string” IN BOOLEAN MODE);

                        Example
                            SELECT * FROM posts WHERE MATCH(body,title) AGAINST ('+Chinesey -Gordon' IN BOOLEAN MODE);
                            SELECT * FROM posts WHERE MATCH(body,title) AGAINST ('+Chinesey -Chan' IN BOOLEAN MODE);\


                     Query Expansion Searches
                        -Query expansion searches give you a powerful option to do a deeper search with more flexibility.
                        -The search takes place twice. In the first phase, the records matching the user-provided query are fetched. In the second phase, relevant words from the first set of records are used for another round of search.

                            SELECT * FROM posts WHERE MATCH(body,title) AGAINST ('Jackie' WITH QUERY EXPANSION);


                    Full-Text Searches with the Query Expansion Mode


                    Example

                    CREATE TABLE posts (
                        id INT NOT NULL AUTO_INCREMENT,
                        title VARCHAR(255) NOT NULL,
                        body TEXT,
                        PRIMARY KEY (id),
                        FULLTEXT KEY (body )
                        );

                    INSERT INTO posts (title, body) VALUES
                    ('Gordon Ramensay', 'Chinesey with a hint of sweetness and with a hint of bitterness'),
                    ('Jackie Chan', 'Extra Spicy with a tiny hint of tanginess'),
                    ('Julie Chan', 'Cheesy and extremely wet with hints of pepper');


                    ALTER TABLE posts ADD FULLTEXT (title, body);

                    SELECT * FROM posts WHERE MATCH(body,title) AGAINST ('Chinesey' IN NATURAL LANGUAGE MODE);


                5.Every 15 th day of month we need to call one query for process data;

                        select * from student_work where work_date > now() - INTERVAL 15 day;

                6.Get data for json object ad disply in demo example application

                7.Use GROUP concat,replace,regexp,min,max,sum fuction in demo application and  join relations implementation in example application
