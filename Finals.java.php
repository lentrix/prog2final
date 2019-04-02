
<table width="100%"><tr><td class="title">Finals.java</td></tr></table>
<pre>
 1 <span class="literal">package</span> finals;
 2 
 3 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">Finals</span> {
 4     
 5     <span class="literal">public</span> <span class="literal">static</span> <span class="literal">void</span> <span class="ST1">main</span>(String[] args) {
 6         Student s1 = <span class="literal">new</span> Student(<span class="string">&quot;</span><span class="string">Villaber</span><span class="string">&quot;</span>, <span class="string">&quot;</span><span class="string">Sharon</span><span class="string">&quot;</span>, <span class="string">&quot;</span><span class="string">BSCS</span><span class="string">&quot;</span>, 1);
 7         Student s2 = <span class="literal">new</span> Student(<span class="string">&quot;</span><span class="string">Al Fahsaad</span><span class="string">&quot;</span>,<span class="string">&quot;</span><span class="string">Hamir</span><span class="string">&quot;</span>, <span class="string">&quot;</span><span class="string">BSCRIM</span><span class="string">&quot;</span>, 2);
 8         Student s3 = s1;
 9         
10         s1.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">Math 101</span><span class="string">&quot;</span>, 89));
11         s1.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">English 101</span><span class="string">&quot;</span>, 91));
12         s1.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">History 101</span><span class="string">&quot;</span>, 87));
13         
14         s2.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">Lit 200</span><span class="string">&quot;</span>, 86));
15         s2.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">REED 201</span><span class="string">&quot;</span>, 90));
16         s2.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">Philo 210</span><span class="string">&quot;</span>, 87));
17         s2.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">Chem 201</span><span class="string">&quot;</span>, 79));
18         
19         s3.addSubject(<span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">Filipino 200</span><span class="string">&quot;</span>, 88));
20         Subject collOr = <span class="literal">new</span> Subject(<span class="string">&quot;</span><span class="string">College Orientation</span><span class="string">&quot;</span>, 90);
21         
22         s2.addSubject(collOr);
23         s3.addSubject(collOr);
24         
25         
26         System.<span class="ST2">out</span>.println(s1); //What is the output for this line? <input type="text" autocomplete="off" name="ans[41]" class="ans long" placeholder="Blank 41" />
27         System.<span class="ST2">out</span>.println(s2); //What is the output for this line? <input type="text" autocomplete="off" name="ans[42]" class="ans long" placeholder="Blank 42" />
28         System.<span class="ST2">out</span>.println(s3); //What is the output for this line? <input type="text" autocomplete="off" name="ans[43]" class="ans long" placeholder="Blank 43" />
29         
30         
31     }
32     
33 }
34 

Suppose at line 
24         collOr.setGrade(95);
25         System.<span class="ST2">out</span>.println(s3.getAverageScore());  
           // What is the output at line 25? <input type="text" autocomplete="off" name="ans[44]" class="ans long" placeholder="Blank 44" />

What is the value of collOr.getCourse() if placed at line 21? <input type="text" autocomplete="off" name="ans[45]" class="ans" placeholder="Blank 45" />
What is s2.getAverageScore()? <input type="text" autocomplete="off" name="ans[46]" class="ans" placeholder="Blank 46" />
What is s1.getSubjects().get(0).getGrade()? <input type="text" autocomplete="off" name="ans[47]" class="ans" placeholder="Blank 47" />
What is s3.getSubjects().get(0).getGrade()? <input type="text" autocomplete="off" name="ans[48]" class="ans" placeholder="Blank 48" />
What is s3.getSubjects().size()? <input type="text" autocomplete="off" name="ans[49]" class="ans" placeholder="Blank 49" />
What is s2.getSubjects().get(1).toString()? <input type="text" autocomplete="off" name="ans[50]" class="ans" placeholder="Blank 50" />
</pre>
