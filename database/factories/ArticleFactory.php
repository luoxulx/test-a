<?php
/**
 * Created by PhpStorm.
 * User: luoxulx
 * Date: 2018/12/4
 * Time: 22:17
 */

use Faker\Generator as Faker;
$content = <<<str
<section class="summary">我们生活在一个算法的时代，算法正以前所未有的方式重塑着我们的世界。那有没有一个主宰一切算法的主算法呢？</section>
<div>
<section class="textblock">
<p class="fr-tag"> </p>
<p class="fr-tag">算法日益影响着我们的生活。但是在它正常运转的大部分时间里我们却没有留意，只有在算法出问题的时候才注意到它的存在。只有在那时候我们才回想起这个世界对算法—那些统治着我们周围所有计算机的、对人类来说日益费解的规则，是如何的依赖。一旦算法出了问题，我们才会想起自己是多么的脆弱（想想天网）。</p>
<p class="fr-tag">Pedro Domingos花了很多时间去思考算法。他的新书，《The Master Algorithm: How the Quest for the Ultimate Learning Machine Will Remake Our World》就是对那个世界的介绍，以及对最新情况的汇报。他认为，我们生活在一个算法的时代，正目睹着它们以前所未有的方式重塑着我们的世界。</p>
<p class="fr-tag">算法究竟对人类会产生什么影响？人类思维与计算机思维的差别在哪里？一旦机器最终学会了学习一切东西又会怎样？Jesse Hicks就这些问题<a href="http://kernelmag.dailydot.com/issue-sections/features-issue-sections/15186/pedro-domingos-the-master-algorithm-interview/">访谈</a>了Domingos。</p>
<p class="fr-tag"><strong>在你所谓的算法时代里为什么这么多人并没有意识到算法的存在？其背后的机器学习机制是怎样的？</strong></p>
<p class="fr-tag">计算机做什么都离不开算法。你的手机、笔记本、汽车、房子和电器里面到处都是算法。但算法是看不见的，你只能看见光鲜的外表，看不到里面发生了什么。Siri用算法理解你说什么，Yelp用算法替你挑选饭店，车载GPS用算法为你寻找最佳路线，读卡机用算法替你完成支付。公司用算法筛选求职者，共同基金用算法交易股票，手机用算法来标记可疑来电。</p>
<p class="fr-tag">“正常”算法和学习算法的区别在于，前者要靠软件工程师人工编程，一步步告诉计算机该做什么，而后者则是靠阅读数据来自行搞定：呐，这里是输入，这里是我们想要的输出，我怎么把一个变成另一个？引人瞩目的是，从下棋到医学分析，同一种机器算法可以学习事情几乎没有限制—只要给它适当的数据。</p>
<p class="fr-tag"><strong>书名里面的“主算法（master algorithm）”是什么？它跟Ray Kurzweil的奇点有何区别？主算法有可能带来哪些进展？</strong></p>
<p class="fr-tag">主算法是能通过数据学习任何东西的算法。<strong>给它提供这个星球的运动、斜面、钟摆的数据，它就能发现牛顿定律</strong>。给它DNA晶体结构数据它就能发现双螺旋体。通过你智能手机上的数据它能够预测下一步你要做什么以及怎么帮助你。甚至还能通过学习大规模的癌症病人病历数据库发现治愈癌症的办法。</p>
<p class="fr-tag">算法还可能给我们带来家庭机器人；用WWB（World Wide Brain，万维脑）代替WWW（万维网），直接回答你的问题而不是展示网页给你；以及360°的推荐系统，不但了解你也了解你最好的朋友，不但可以向你推荐书、电影，还有约会对象、工作、房子和旅游目的地等你生活中的一切东西。</p>
<p class="fr-tag">Kurzweil的奇点是指人工智能超越人类智能（另可参见<a href="http://36kr.com/p/5039291.html">关于超级智能的思考</a>），令我们无法理解的那一刻。或者更精确地说，是奇点的“视界（event horizon）”，就像黑洞的视界指的是连光线也无法逃逸的那个点。如果没有主算法，我们就不会那么快到达奇点。有了主算法，AI当然就会加速，但我们仍然能对这个世界有很多理解，因为在我们的主导下AI仍然能够为我们服务。我们可能不知道它们是怎么制造出结果的（参见<a href="http://36kr.com/p/207751.html">Google会思考的深度学习系统</a>），但我们可以知道这些产出会替我们干什么，否则就不要它们了。此外，这个世界本来就有些东西是我们无法理解的。所不同的是，现在的这个无法完全理解的世界部分是我们自己造出来的，这当然是一种改进。</p>
<p class="fr-tag"><strong>你说这个领域当前是“部落”割据的局面，某些机器学习算法在解决特定问题时表现更好，但没有一种算法能够战胜任何其他算法：即缺少了一个能够适用于我们迄今知道的一切的大一统理论，一个能够为今后几十年乃至数百年的发展打下基础的理论。这个断言本身也很宏大。那主算法这个说法的合理性在哪里？为什么现在的“部落”还不能联合起来？</strong></p>
<p class="fr-tag">在数学上可以证明，哪怕是最简单的学习算法，只要赋予足够多的数据，就可以学会任何东西。因此，主算法毫无疑问是存在的，而且每个算法部落的研究人员的确认为自己已经发现了它。但关键是这个算法必须能够利用合理的数据和计算学会你希望它学的东西。我们可以举出两个实证例子：<strong>自然界至少为我们提供了两个算法可以学会任何东西的例子：即进化和大脑</strong>。所以主算法是存在的，问题是我们否精确地找出来，完整地写下来，就像物理学家把物理定律用公式表达出来一样（其本身也是算法）。</p>
<p class="fr-tag">不幸的是，机器学习的5个部落就像盲人与大象：摸到鼻子的以为它是蛇，摸到脚的以为是树，摸到牙的以为是牛。我们需要退后一步看看全景，看看所有这些部分是怎么组合起来的。具有讽刺意味的是，做到这一点对于不懂行的人来说也许更容易些。</p>
<p class="fr-tag"><strong>你的书开篇引用了Alfred North Whitehead的话：“人类文明的进步是通过增加不用思考就能执行的重要操作的数量来实现的。”不管这个结论是否成立，但“思考”无疑跟文明与人性密切相关。思考是一项独特的、甚至是决定性的人类活动。所以Nicholas Carr等人是反对把思考外包出去的，因为这会减少我们的人性—其担心是缺少思考会导致我们更加机器人化（广义上）。与此同时，我们又担心“思考”机器：你提到了天网等世界末日式的人工智能。那计算机是否已经有能力“思考”？或者说那是不是一项独特的人类活动—如果是的话，未来的人类思考者与机器学习者之间的差别又在哪里呢？</strong></p>
<p class="fr-tag">著名的计算机科学家Edsger Dijkstra说过，计算机能否思考这个问题的意义跟潜水艇会不会游泳一样。重要的是计算机能解决人类通过思考解决的问题—而这些问题的范围在不断扩大。计算机通过机器学习甚至解决了一些我们还不知道如何去编程让他们解决的问题—他们是自己想出来的。所以这条界限是非常模糊的，而且一直在变动。</p>
<p class="fr-tag">我不同意Nicholas Carr关于外包思考会毁灭人性的说法—相反，这还会增强人性，因为它让我们可以思考更好的东西。而这正是Whitehead的要点所在。苏格拉底不喜欢写东西，因为这样会让大家忘记东西。幸运的是柏拉图把他的想法写下来了，所以现在人类还能记住他们。写增强了我们的记忆，Google又把它提高了一个层次。它远没有让我们变得更笨，而是变得更加聪明。</p>
<p class="fr-tag"><strong>书的结尾写到，“大家担心计算机会变得太聪明然后接管世界，但真正的问题是他们太蠢而且已经接管了世界。”你能不能解释一下是什么意思？</strong></p>
<p class="fr-tag">霍金和Elon Musk这些名人对人工智能表达了担忧，说这是对人类存在的威胁。但“天网”这样的邪恶AI接管世界的说法实在是有些牵强附会。问题在于，大家把智能和人混淆了。好莱坞电影里面AI和机器人总是人形的，但现实中的它们是很不同的。计算机是没有自己的意愿、情绪或者意识的。<strong>它们只是我们的延伸</strong>。只要它们解决的是我们设定的问题，只要我们设定好问题边界并对解决方案进行查验，计算机就可以无限智能同时不会对我们构成威胁。</p>
<p class="fr-tag">但这并不是说一点也不用担心。跟其他技术一样，人也会出于邪恶的目的而利用AI。但最重要的是，AI会提供我们要求的而不是我们真正想要的，而这有可能导致伤害。计算机已经做出了今天的各种重要决定—如谁应该拿到工作，谁应该获得信贷，谁应该被标记为潜在恐怖分子。而他们往往会犯错，因为它们缺乏常识。但解决的办法应该是让它们变得更聪明，而不是更蠢。所以我们应该担心的不是AI太多，而是太少。</p>
<p class="fr-tag"><strong>机器学习处理最需要注意什么？</strong></p>
<p class="fr-tag">我们每个人都应该控制周围的机器学习算法。否则它们就只会为开发它们的组织服务而不是我们。这就好比开车：你得知道方向盘和刹车在哪里，知道怎么处置它们。如果司机说“我认为我知道你要去哪里，我会送你过去的，”那你最好马上下车。但现在的机器学习就是这样的。它们有控制按钮，但是你是看不见的。你得，比方说，告诉Amazon的推荐系统你希望它替你做什么，让它调整选择，解释它错在什么地方等。机器学习传播得越广，纠偏就越重要。</p>
<p class="fr-tag"><strong>我们要取得什么进展主算法才能实现？</strong></p>
<p class="fr-tag">许多人认为我们已经具备创建主算法的主要思想，剩下的只是如何组合的问题。我们的确在这个方向上取得了长足进展，实际上离成功已经不远了。但我的感觉是我们还缺失了一些重大思想，得有人想出来。我自己已经有了一些想法，但我毕竟只是一个人。写这本书的目的就是让其他人也知道我的想法。我的秘密愿望是有个小孩，一位AI界的牛顿，能看到这本书，开始思考机器学习，然后突然灵光一闪，世界从此大不一样。</p>
</section>
</div>
str;

$factory->define(\App\Models\Article::class, function (Faker $generator) use ($content) {
    return [
        'category_id' => 1,
        'user_id' => 1,
        'is_draft' => 0,
        'view_count' => 1,
        'slug' => $generator->slug,
        'title' => $generator->userName,
        'source' => $generator->url,
        'description' => '描述-'.str_random(12),
        'thumbnail' => null,
        'content' => $content,
    ];
});