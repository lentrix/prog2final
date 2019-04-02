
<table width="100%"><tr><td class="title">Subject.java</td></tr></table>
<pre>
 1 <span class="literal">package</span> finals;
 2 
 3 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">Subject</span> {
 4     <span class="literal">private</span> <input type="text" autocomplete="off" name="ans[1]" class="ans" placeholder="Blank 1" /> <span class="ST1">course</span>;
 5     <span class="literal">private</span> <span class="literal">int</span> <span class="ST1">grade</span>;
 6 
 7     <span class="literal">public</span> <span class="ST0">Subject</span>(String course, <input type="text" autocomplete="off" name="ans[2]" class="ans" placeholder="Blank 2" /> grd) {
 8         <span class="literal">this</span>.<span class="ST1">course</span> = course;
 9         <span class="literal">this</span>.<span class="ST1">grade</span> = <input type="text" autocomplete="off" name="ans[3]" class="ans" placeholder="Blank 3" />;
10     }
11 
12     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[4]" class="ans" placeholder="Blank 4" />() {
13         <span class="literal">this</span>.<span class="ST1">course</span> = <span class="string">&quot;&quot;</span>;
14         <span class="literal">this</span>.<span class="ST1">grade</span> = 0;
15     }
16 
17     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[5]" class="ans" placeholder="Blank 5" /> <span class="ST0">getCourse</span>() {
18         <input type="text" autocomplete="off" name="ans[6]" class="ans" placeholder="Blank 6" /> <input type="text" autocomplete="off" name="ans[7]" class="ans" placeholder="Blank 7" />;
19     }
20 
21     <span class="literal">public</span> <span class="literal">void</span> <span class="ST0">setCourse</span>(<input type="text" autocomplete="off" name="ans[8]" class="ans" placeholder="Blank 8" /> course) {
22         <input type="text" autocomplete="off" name="ans[9]" class="ans" placeholder="Blank 9" />.<span class="ST1">course</span> = course;
23     }
24 
25     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[10]" class="ans" placeholder="Blank 10" /> <span class="ST0">getGrade</span>() {
26         <span class="literal">return</span> <span class="ST1">grade</span>;
27     }
28 
29     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[11]" class="ans" placeholder="Blank 11" /> <span class="ST0">setGrade</span>(<input type="text" autocomplete="off" name="ans[12]" class="ans" placeholder="Blank 12" /> grade) {
30         <span class="literal">this</span>.<input type="text" autocomplete="off" name="ans[13]" class="ans" placeholder="Blank 13" /> = grade;
31     }
32     
33     <span class="comment">/**</span>
34 <span class="comment">     * </span><span class="ST2">@return</span> <span class="comment">the</span> <span class="comment">course</span> <span class="comment">name</span> <span class="comment">and</span> <span class="comment">the</span> <span class="comment">grade</span>
35 <span class="comment">     * </span><span class="comment">e</span><span class="comment">.</span><span class="comment">g</span><span class="comment">.</span> <span class="comment">Math</span><span class="comment"> 101 : 98</span>
36      <span class="comment">*/</span>
37     @Override
38     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[14]" class="ans" placeholder="Blank 14" /> <span class="ST0">toString</span>() {
39         <span class="literal">return</span> <span class="ST1">course</span> + <span class="string">&quot;</span><span class="string"> : </span><span class="string">&quot;</span> + <input type="text" autocomplete="off" name="ans[15]" class="ans" placeholder="Blank 15" />;
40     }
41 }
42 
</pre>