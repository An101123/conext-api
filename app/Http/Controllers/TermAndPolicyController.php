<?php

namespace App\Http\Controllers;

use App\Models\TermAndPolicy;
use Illuminate\Http\Request;

class TermAndPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * 
     * @OA\Get(
     *     tags={"Term-and-policies"},
     *     summary="Get list of term-and-policies",
     *     path="/api/term-and-policies",
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *                     @OA\Property(
     *                         property="errcode",
     *                         type="integer",
     *                         description="The response code"
     *                     ),
     *                     @OA\Property(
     *                         property="errmsg",
     *                         type="string",
     *                         description="The response message"
     *                     ),
     *                     @OA\Property(
     *                         property="data",
     *                         type="array",
     *                         description="The response data",
     *                         @OA\Items
     *                     ),
     *                     example={
     *                          "code": 200,
                                "data":{
                                    "id": 1,
                                    "content": "<p><strong>Terms of Use</strong><br><br>This Terms of Use Agreement &nbsp;is an agreement between Conext and you, the member , regarding your use of the Conext Website and any services, features, contents or applications offered at the Conext.vn domain and related sub-domains (collectively the 'Website'). By using the Website, you agree to be bound by the terms and conditions of this Agreement and the Privacy Policy. In the event of any inconsistency between the Conext Privacy Policy and this Terms of Use Agreement, the Terms of Use Agreement shall control.<br><br>Conext may change, modify, add, or delete portions of this Agreement from time to time with or without advanced notice and such changes shall be effective upon posting on the Website. Your continuing to use of the Website after such changes constitutes your acceptance of the new Agreement. You should regularly check this page to learn about new terms and conditions as they may affect you. The term 'You' refers to all individuals and/or organization accessing Conext for any purpose.<br><br>This Agreement includes:<br><br>· &nbsp; Use and Termination<br><br>· &nbsp; Proprietary Rights<br><br>· &nbsp; Users' Responsibilities<br><br>· &nbsp; Links and other websites<br><br>· &nbsp; Disclaimer of Warranties<br><br>· &nbsp; Limitation of Liability<br><br>I. Use and Termination<br><br>Conext shall not be held liable to any third party for loss of profit, loss of use, business interruption, and loss of data or cost of procurement of substitute goods, technologies or services, cost of cover or punitive exemplary, indirect or special consequential damages arising from or related to the use of the website or this agreement.<br><br>Conext reserves the right, in its sole discretion, to terminate your membership effectiveness immediately for any reason, with or without notice, if you violate this agreement. You may also terminate your membership at any time for any reason by sending Conext written notice of such intent to<br><br>II. Proprietary Right<br><br>i. Conext.vn website content<br><br>a. You acknowledge that Content on the Conext.vn website is generally provided by the ST United JSC and/or other Users. You acknowledge that the Conext.vn website permits access to Content that is protected by copyrights, trademarks, and other proprietary rights, and that these Proprietary Rights are valid and protected in all media existing now or later developed and except as is explicitly provided below, your use of Content shall be governed by applicable copyright and other intellectual property laws. You acknowledge that the Conext.vn website owns a copyright in the 'look and feel,' i.e., the selection, coordination, arrangement and presentation of such Content. Conext, the Conext logo, and other Conext logos and names are trademarks of Conext JSC. You agree not to display or use these trademarks in any manner without Conext prior, written permission.<br><br>b. You may not modify, copy, reproduce, transmit, distribute, publish, create derivative works from, display or otherwise transfer or commercially exploit any of the Content, in whole or in part, provided, however, that you may (i) make a reasonable number of digital or other form of copies to permit your computer hardware and software to access and view the Content, (ii) print one copy of each piece of Content, (iii) make and distribute a reasonable number of copies of Content, in whole or in part, in hard copy or electronic form for internal use only. Any permitted copies of Content must reproduce in an unmodified form any notices contained in the Content, such as all Proprietary Right notices, and an original source attribution to 'Conext.vn website' and its URL address. You acknowledge that the Conext.vn website and/or Users remain the owners of the Content and that you do not acquire any Proprietary Rights by downloading or printing Content.<br><br>ii. Content Provided by Member<br><br>You are solely responsible for the content (including your photos) that you publish or display on Conext website, or transmit to other Members (collectively the 'Member Content). You agree that the Conext may review and delete or remove any Member Content that in its sole judgment violates this Agreement and the Privacy Policy or which might be offensive, illegal, or that might violate the rights, harm, or threaten the safety of Members or others. Any user failing to follow this agreement may be banned to access the website.<br><br>III.Users’ Responsibilities<br><br>You agree to not use the Conext Service to:<br><br>· &nbsp; Protest the State of Socialist Republic of Vietnam, to destroy the unity of the nation, to propagandize, distort, provoke or provide information against Vietnamese Government.<br><br>· &nbsp; Provoke violation, war, aggression among nations and people, to excite obscene, depravation, crime, social evils or superstition, to ruin the nation's traditions and customs.<br><br>· &nbsp; Disclose state secrets, military, security, economic, external relation and other secrets provided for by the laws.<br><br>· &nbsp; Distort, slander, libel or offend the prestige of entities, the honor, dignity or prestige of individuals<br><br>· &nbsp; Introduce and propagate products and services prohibited by the laws<br><br>· &nbsp; Mention issues related to politics and religions.<br><br>· &nbsp; Use uncultured words that violate code of ethics and traditional culture of Vietnam.<br><br>· &nbsp; Upload, post, email, transmit or otherwise make available any content that is unlawful, harmful, threatening, abusive, harassing, tortious, defamatory, vulgar, obscene, libelous, invasive of another's privacy, hateful, or racially, ethnically or otherwise objectionable.<br><br>· &nbsp; Use the Conext Service for any illegal purpose, including but not limited to conspiring to violate laws.<br><br>· &nbsp; Upload, post, email, transmit or otherwise make available any content or initiate communication that infringes upon patents, trademarks, trade secrets, copyrights or other proprietary rights.<br><br>· &nbsp; Post content that harasses or advocates harassment of another person.<br><br>· &nbsp; Upload, post, email, transmit or otherwise make available any unsolicited or unauthorized advertising, promotional materials, 'junk mail,' 'spam', 'chain letters' or any other form of solicitation. This prohibition includes but is not limited to:<br><br>a. Using Conext invitations to send messages to people who don't know you or who are unlikely to recognize you as a known contact.<br><br>b. Using Conext to connect to people who don't know you and then send unsolicited promotional messages to those direct connections without their permission; and<br><br>c. Sending messages to distribution lists, newsgroup aliases, or group aliases.<br><br>· &nbsp; Upload, post, email, transmit or otherwise make available any material that contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer software or hardware or telecommunications equipment.<br><br>· &nbsp; Collect or store personal data about other users in connection with the prohibited conduct and activities set forth in paragraphs above.<br><br>· &nbsp; You also agree to use Conext Service for personal, non-commercialize purpose.<br><br>IV. Links and other websites<br><br>The Website contains links to other websites. Conext is not responsible for the content, accuracy or opinions in such websites, and such websites are not investigated, monitored or checked for accuracy or completeness by Conext. Inclusion of any linked website on or through the Website does not imply approval or endorsement of the linked website by Conext. If you decide to leave the Website and access these third-party sites, you do so at your own risk.<br><br>V. Disclaimer of Warranties<br><br>You understand and agree that the Conext Service is provided on an 'as is' and 'as available' basis and that Conext does not assume any responsibility for prompt or proper delivery, or retention of any user information or communications between users. Conext assumes no responsibility for the accuracy or existence of any communications between users. Conext expressly disclaims all warranties of any kind, whether expressed or implied, including, but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement.<br><br>Conext makes no warranty that (i) the Conext Service will meet your requirements, (ii) the Conext Service will be uninterrupted, timely, secure, or error-free, (iii) the results that may be obtained from use of the Conext Service will be accurate or reliable, (iv) the quality of any products, services, information, or other material purchased or obtained by you through the Conext Service will meet your expectations, and (v) any errors in the software will be corrected.<br><br>Any material downloaded or otherwise obtained through the use of the Conext Service is done at your own discretion and risk and that you will be solely responsible for any damage to your computer system or loss of data that results from the download of any such material. No advice or information, whether oral or written, obtained by you from Conext or through or from the Conext Service shall create any warranty not expressly stated in this Terms of Use agreement.<br><br>Some jurisdictions do not allow the exclusion of certain warranties or the limitation or exclusion of liability for incidental or consequential damages. Accordingly, some of the above limitations may not apply to you.<br><br>VI. Limitation of Liability<br><br>You expressly understand and agree that Conext shall not be liable for compensating, including paying legal fees, any third party for your activities and usage of the website, for the content you post, send, for your violation of the Terms of Use, for your violation of others' rights, or for your violation of current law.<br><br><strong>Privacy Policy</strong><br><br>Conext is committed to safeguarding your privacy online. Please read the following policy to understand how your personal information will be treated as you make full use of the Conext.vn website. By using Conext website, you consent to the policies and practices described in this Policy. This Policy may change from time to time with or without advance notice, so please check back periodically.<br><br>Our site may contain links to other websites over which we have no control. ST United JSC, which owns and operates Conext.vn, is not responsible for the privacy policies or practices of other websites to which you choose to link from Conext website. We encourage you to review the privacy policies of those other websites so you can understand how they collect, use and share your information. This Privacy Policy applies solely to the information we collect on Conext website, and does not apply to information we collect in any other fashion. This policy will let you know:<br><br>Information Collection<br>Information Use<br>Information Sharing<br>Accessing and Updating Your Account   Information<br>Security<br><br>I. Information Collection<br><br>The Conext.vn website collects information in several ways from different parts of our website.<br><br>Registration<br><br>In order to become an Conext user, you are requested to create an account on the website. This requires the following information: name, salutation, date of birth, country, city, working industries. This information is fundamental for our approving your membership registration on Conext.vn.<br><br><br data-cke-filler='true'></p><p>Profile Information<br><br>As a user, you may provide additional information in the Profile section professional experiences, and networking objectives. Providing additional information beyond what is required at registration is entirely optional, but enables you to better identify yourself and find new opportunities on the Conext website.<br><br>Cookies<br><br>As part of offering and providing customizable and personalized services, the Conext website may use cookies to store and sometimes track information about you. A cookie is a small amount of data that is sent to your browser from a web server and stored on your computer's hard drive. Several features of the Conext website require that you accept cookies in order to work properly.<br><br>One type of cookie, known as a 'persistent' cookie, is set once you've logged in to your Conext account. The next time you visit the Conext website, the persistent cookie will allow us to recognize you as an existing user so you will not need to log in before using the service. Conext currently keeps this cookie open for consecutive 2 weeks for your convenient use. In order to access or change any of your personal details, however, you must log in securely again with your password even if your computer contains your persistent cookie. Additionally, if you log out of the Conext site you will need to re-enter your password the next time you visit in order to log in to your account.<br><br>Conext will also gather or may gather certain information about your use of our site, such as what areas you visit and what services you access. Moreover, there is information about your computer hardware and software that is or may be collected by Conext. This information can include without limitation your IP address, browser type, domain names, access items and referring website addresses.<br><br>II. Information Use<br><br>Conext is an online networking service dedicated to help all types of professionals more effectively connect with one another. The information you choose to provide on this site is used to help you describe yourself to other users.<br><br>Conext Communications<br><br>Conext will communicate with you through emails and notices posted on this website. These include a series of notification emails which help inform new users about various features of the service. Please be aware that you will always receive certain emails from Conext related to the proper functioning of your account, such as email notices when another user in your network sends you an opportunity. Conext may send you promotional information unless you have opted out of receiving such information. If you wish to opt-out of receiving promotional emails, please change your Email Notifications under Privacy Settings.<br><br>Customized Content<br><br>Information you provide at registration or in your profile section is also used to customize your experience on the web site. For example, when you login to your account we will display the screen names of new users who have recently joined your network.<br><br>III. Information Sharing<br><br>Sharing Information with Third Parties<br><br>Conext takes the privacy of our users very seriously, and we do not sell, rent, or otherwise provide your personal information or information about your use of the Conext website (such as the areas you visit or the services you access) to third parties, except as set forth in the following five subparagraphs.<br><br>1. We may allow third parties to communicate with you through Conext system for appropriate contents. For example, if you indicate that you would like to receive information about the products or services of third parties, we may allow third parties such as employers, recruiters, data aggregators, marketers or others to send you email or communicate with you through Conext system. We may use data we have about you (such as the interests and preferences you have expressed) to determine whether you might be interested in the products or services of a particular third-party.<br><br>2. We may disclose such information to companies and individuals we employ to perform functions on our behalf. Examples may include hosting our Web servers, analyzing data, providing marketing assistance, processing credit card or other types of payments, and providing customer service. These companies and individuals will have access to your personal information as necessary to perform their functions, but they may not share that information with any other third party.<br><br>3. We may disclose such information if legally required to do so, if requested to do so by a governmental entity or if we believe in good faith that such action is necessary to: (a) conform to legal requirements or comply with legal process; (b) protect the rights or property of the legal entity owning Conext.vn or its partner companies; (c) prevent a crime or protect national security; or (d) protect the personal safety of users or the public.<br><br>4. We may disclose and transfer such information to a third party who acquires all or a substantial portion of the legal entity owning Conext.vn, whether such acquisition is by way of merger, consolidation or purchase of all or a substantial portion of our assets.<br><br>5. We may use your personal information from your account for any and all of Conext's marketing purposes. For example, that may be used in newspaper advertising, direct mail pieces, sales kits, posters and other materials related to Conext.<br><br>Conext may also share aggregated anonymous information about visitors to each section of Conext with its clients, partners and other third parties so that they may understand the kinds of visitors to the Conext.vn website and how those visitors use the site.<br><br>Communications between Users<br><br>Many emails you initiate through Conext, an invitation sent to a non-user for instance, will list your name in the header of the message. Emails you initiate may also provide aggregate information about your network (for instance how many people are in your network), but will never list the people to whom you're directly connected. Other communications that you initiate through the Conext website, like a request for contact, will list your name as the initiator but will not include your personal contact information. Your contact information will only be shared with another user if both of you have indicated that you would like to establish contact with each other.<br><br>IV. Accessing and Updating Your Account Information<br><br>You can review the personal information you provided us and make any desired changes to the information, or to the settings for your Conext account, at any time by logging in to your account on the Conext website and editing the information on your profile page. Once you have logged onto the system during a given session, wherever you go on the Conext.vn website, your information will stay with you until or unless you click on the 'Sign out' link, which is accessible from within header of your own screens on Conext.vn when you are logged in.<br><br>If you are a previously registered user and you have lost or forgotten your password, you may obtain it by email by using our 'Forgot Password' feature. Click the button on any login page to request that your password be emailed to you. We cannot provide your password by any other means.<br><br>Your Conext.vn website account can be deleted, but doing so will result in not being able to access any of the features of the program that require user registration. We will or may keep an archival copy of your account which is not accessible on the Internet.<br><br>V. Security<br><br>In order to secure your personal information, access to your data on Conext is password-protected. Conext takes appropriate precautions to protect our Members' information. Unfortunately, perfect security does not exist on the internet, and therefore, Conext makes no representations or warranties with regard to the sufficiency of these security measures. Conext shall not be responsible for any damages that result from a lapse in compliance with this Privacy Policy because of a security breach, technical malfunction or similar problem. Always be careful and responsible regarding your personal information.<br><br>Because email and instant messaging are not recognized as secure communications, we request that you not send private information to us or other Members by email or instant messaging services. If you have any questions about the security of the Conext website, please contact us at&nbsp;<a href='mailto:hello@stunited.vn'>hello@stunited.vn</a></p>",
                                    "created_at": null,
                                    "updated_at": null
                                }
     *                      }
     *                 )
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Term and policy not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     )
     * )
     */
    public function index()
    {
        $data = TermAndPolicy::all();
        return response()->json([
            'code' => 200,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
