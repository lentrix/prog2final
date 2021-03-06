
<table width="100%"><tr><td class="title">Student.java</td></tr></table>
<pre>
 1 <span class="literal">package</span> finals;
 2 
 3 <span class="literal">import</span> java.util.<input type="text" autocomplete="off" name="ans[16]" class="ans" placeholder="Blank 16" />;
 4 
 5 <span class="literal">public</span> <span class="literal">class</span> <span class="ST0">Student</span> {
 6     <span class="literal">private</span> String <span class="ST1">lastName</span>;
 7     <span class="literal">private</span> String <span class="ST1">firstName</span>;
 8     <span class="literal">private</span> String <span class="ST1">program</span>; <span class="comment">//program enrolled e.g. BSIT, BSHRM, etc.</span>
 9     <span class="literal">private</span> <span class="literal">int</span> <span class="ST1">year</span>;
10     <span class="literal">private</span> Vector&lt;<input type="text" autocomplete="off" name="ans[17]" class="ans" placeholder="Blank 17" />&gt; <span class="ST1">subjects</span>;
11 
12     <span class="literal">public</span> <span class="ST0">Student</span>(String lastName, String firstName, String program, <input type="text" autocomplete="off" name="ans[18]" class="ans" placeholder="Blank 18" /> year) {
13         <span class="literal">this</span>.<span class="ST1">lastName</span> = lastName;
14         <span class="literal">this</span>.<span class="ST1">firstName</span> = firstName;
15         <span class="literal">this</span>.<span class="ST1">program</span> = program;
16         <input type="text" autocomplete="off" name="ans[19]" class="ans" placeholder="Blank 19" /> = year;
17         <span class="ST1">subjects</span> = <span class="literal">new</span> <input type="text" autocomplete="off" name="ans[20]" class="ans" placeholder="Blank 20" />&lt;Subject&gt;();
18     }
19 
20     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[21]" class="ans" placeholder="Blank 21" /> <span class="ST0">getLastName</span>() {
21         <input type="text" autocomplete="off" name="ans[22]" class="ans" placeholder="Blank 22" /> <span class="ST1">lastName</span>;
22     }
23 
24     <span class="literal">public</span> <span class="literal">void</span> <span class="ST0">setLastName</span>(String lastName) {
25         <input type="text" autocomplete="off" name="ans[23]" class="ans" placeholder="Blank 23" /> = lastName;
26     }
27 
28     <span class="literal">public</span> String <span class="ST0">getFirstName</span>() {
29         <span class="literal">return</span> <span class="ST1">firstName</span>;
30     }
31 
32     <span class="literal">public</span> <span class="literal">void</span> <span class="ST0">setFirstName</span>(<input type="text" autocomplete="off" name="ans[24]" class="ans" placeholder="Blank 24" /> <input type="text" autocomplete="off" name="ans[25]" class="ans" placeholder="Blank 25" />) {
33         <span class="literal">this</span>.<span class="ST1">firstName</span> = firstName;
34     }
35 
36     <span class="literal">public</span> String <span class="ST0">getProgram</span>() {
37         <span class="literal">return</span> <span class="ST1">program</span>;
38     }
39 
40     <span class="literal">public</span> <span class="literal">void</span> <span class="ST0">setProgram</span>(String program) {
41         <span class="literal">this</span>.<span class="ST1">program</span> = program;
42     }
43 
44     <span class="literal">public</span> <span class="literal">int</span> <input type="text" autocomplete="off" name="ans[26]" class="ans" placeholder="Blank 26" />() {
45         <span class="literal">return</span> <span class="ST1">year</span>;
46     }
47 
48     <span class="literal">public</span> <span class="literal">void</span> <span class="ST0">setYear</span>(<input type="text" autocomplete="off" name="ans[27]" class="ans" placeholder="Blank 27" />) {
49         <span class="literal">this</span>.<span class="ST1">year</span> = year;
50     }
51 
52     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[28]" class="ans" placeholder="Blank 28" /> <span class="ST0">getSubjects</span>() {
53         <span class="literal">return</span> <input type="text" autocomplete="off" name="ans[29]" class="ans" placeholder="Blank 29" />;
54     }
55 
56     <span class="comment">/**</span>
57 <span class="comment">     * </span><span class="ST2">Adds</span> <span class="ST2">a</span> <span class="ST2">subject</span> <span class="ST2">to</span> <span class="ST2">the</span> <span class="ST2">list</span> <span class="ST2">of</span> <span class="ST2">subjects</span>
58 <span class="comment">     * </span><span class="ST2">enrolled</span> <span class="ST2">by</span> <span class="ST2">the</span> <span class="ST2">student</span>
59 <span class="comment">     * </span><span class="ST2">@param</span> subject 
60      <span class="comment">*/</span>
61     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[30]" class="ans" placeholder="Blank 30" /> <span class="ST0">addSubject</span>(<input type="text" autocomplete="off" name="ans[31]" class="ans" placeholder="Blank 31" /> subject) {
62         <input type="text" autocomplete="off" name="ans[32]" class="ans" placeholder="Blank 32" />.add(subject);
63     }
64     
65     <span class="comment">/**</span>
66 <span class="comment">     * </span><span class="ST2">Computes</span> <span class="ST2">and</span> <span class="ST2">returns</span> <span class="ST2">the</span> <span class="ST2">average</span>
67 <span class="comment">     * </span><span class="ST2">score</span> <span class="ST2">of</span> <span class="ST2">the</span> <span class="ST2">student</span> <span class="ST2">based</span> <span class="ST2">on</span> <span class="ST2">the</span> 
68 <span class="comment">     * </span><span class="ST2">average</span> <span class="ST2">of</span> <span class="ST2">the</span> <span class="ST2">scores</span> <span class="ST2">in</span> <span class="ST2">the</span> <span class="ST2">subjects</span>
69 <span class="comment">     * </span><span class="ST2">property</span>
70 <span class="comment">     * </span><span class="ST2">@return</span> <span class="comment">float</span>
71      <span class="comment">*/</span>
72     <span class="literal">public</span> <input type="text" autocomplete="off" name="ans[33]" class="ans" placeholder="Blank 33" /> <span class="ST0">getAverageScore</span>() {
73         <span class="literal">int</span> sum = 0;
74         <span class="literal">for</span>(Subject s: <input type="text" autocomplete="off" name="ans[34]" class="ans" placeholder="Blank 34" />) {
75             sum += s.<input type="text" autocomplete="off" name="ans[35]" class="ans" placeholder="Blank 35" />();
76         }
77         
78         <span class="literal">return</span> (<span class="literal">float</span>)sum/<span class="ST1">subjects</span>.<input type="text" autocomplete="off" name="ans[36]" class="ans" placeholder="Blank 36" />();
79     }
80     <span class="comment">/** <span class="ST2">returns student details e.g. Lenteria, Benjie BSCS-4</span> */</span>
81     @Override
82     <span class="literal">public</span> String <span class="ST0">toString</span>() {
83         <span class="literal">return</span> <input type="text" autocomplete="off" name="ans[37]" class="ans" placeholder="Blank 37" /> + <span class="string">&quot;</span><span class="string">, </span><span class="string">&quot;</span> + <input type="text" autocomplete="off" name="ans[38]" class="ans" placeholder="Blank 38" /> + <span class="string">&quot;</span> <span class="string">&quot;</span> + <input type="text" autocomplete="off" name="ans[39]" class="ans" placeholder="Blank 39" /> + <span class="string">&quot;</span><span class="string">-</span><span class="string">&quot;</span> + <input type="text" autocomplete="off" name="ans[40]" class="ans" placeholder="Blank 40" />;
84     }
85 }
86 
</pre>