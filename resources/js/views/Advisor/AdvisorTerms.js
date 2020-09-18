import React, { Component } from 'react';
import PerfectScrollbar from 'react-perfect-scrollbar';
import Imageb from './Imageb/Imageb';
import {
    Button,
    Card,
    CardBody,
    Col,
    FormGroup,
    Input,
    Label,
    Row,
  } from 'reactstrap';
  class AdvisorTerms extends Component{
    constructor(props){
      super(props);
      this.state = {
        dashboard:false,
      }
      this.dashboard=this.dashboard.bind(this);
      }

    dashboard(){
      alert(window.location.hostname);
      this.props.history.push('home');
    }

    back = e =>{
      e. preventDefault();
      this.props.prvStep();
    }
      render(){
          return<div>   <Imageb/>                   
          <Row className=" tops justify-content-center ">                
            <Col md="6" xs="12" sm="6" className="text-center">
            <img className="reglogo" src="assets/images/averti.png" alt="averti"/>
            <Card className="text-info">
            
            <PerfectScrollbar>
                 <p>Please read these Terms of Use carefully, as they contain important information regarding your legal rights and remedies.
Overview
Redtail Technology, Inc. (“Redtail”, “we”, “us” and terms of similar meaning) provides this website (in these Terms we call this website and any successor websites, the “Site”) and the products and Services (individually and collectively, the “Services”) found at this Site, to you subject to these Terms and Conditions of Use (these “Terms”). If you are agreeing to these Terms on behalf of a corporate entity, you represent and warrant that you have the legal authority to bind such corporate entity to these Terms, in which case the Terms “you”, “your”, “User” or “Customer” shall refer to such corporate entity. Nothing in these Terms shall be deemed to confer any third-party rights or benefits. Please read these Terms carefully before using the Site. By accessing or using the Site or by merely browsing the Site you agree to be legally bound by these Terms and all terms, policies and guidelines incorporated by reference in these Terms. If you do not agree with these Terms in their entirety, you may not use the Site.
Use of the Site
In order to utilize the Services you will be asked to create an account (“Account”) by providing certain personal information such as your name, email address, physical address and major credit card number. (The Site’s Privacy Policy (corporate.redtailtechnology.com/privacy-policy) explains how such information may be collected and used). Redtail offers a number of Services on the Site. When you enroll to obtain a Service from Redtail on the Site, you accept the specific Terms applicable to that Service. Your use of any such Service offered on the Site is governed by the Terms and Conditions for that Service. Except as provided in the Terms, Redtail does not warrant that any product descriptions or content contained in the Site is accurate, current, reliable, complete, or error-free.
You may not use the Site in any manner that: (i) imposes an unreasonable or disproportionately large load on the Site’s infrastructure, or otherwise adversely affects, restricts or inhibits any other User from using and enjoying the Site; (ii) introduces a virus or other harmful component to the Site; (iii) constitutes or contains false or misleading indications of origin or statements of fact including but not limited to impersonating any other person; (iv) contains any virus, Trojan horse, worm, time bomb, cancelbot or other similar harmful programming routine; (v) results in the transmission of any information, data, text, images, links, files, etc., except in connection with your authorized use of the Site and (vi) results in the harvesting of any information concerning other Users of this Site.
Redtail reserves the right to change or modify any Terms, or any policy or guideline of the Site, at any time and in its sole discretion. If you do not agree with changes, you can cancel your account with us without further obligation. Unless otherwise specified, any changes or modifications will be effective immediately upon posting of the revisions on the Site, and your use of the Site after such time will constitute your acceptance of such changes or modifications. From time to time, review the Terms, and any policies and documents incorporated in them, to understand the Terms and Conditions that apply to your use of the Site. The Terms will always show the ‘latest updated’ date. If you do not agree to any amended Terms, you must stop using the Site. If you have any questions about the Terms, please email us at support@redtailtechnology.com.
The Services we provide through the Site are for your own use only. You may not resell, lease or provide them in any other way to anyone else.
Privacy Policy
This is a United States website and is subject to United States law. Please refer to Redtail’s Privacy Policy, available at corporate.redtailtechnology.com/privacy-policy for information on how Redtail collects, uses and discloses Personally Identifiable Information (“PII”) from its Users. By using the Site you agree to our use, collection and disclosure of Personally Identifiable Information in accordance with the Privacy Policy.
Registration Data, Account Security
The Site is available to persons who are 18 years and older, who have properly registered and who have not been suspended or removed by Redtail for any reason (an “Account Holder”).
As an Account Holder, you agree to (a) provide accurate, current and complete information as may be prompted by any registration forms on the Site (“Registration Data”); (b) maintain the security of your password; (c) maintain and promptly update the Registration Data, and any other information you provide to Redtail, and to keep it accurate, current and complete; and (d) accept all risks of unauthorized access to the Registration Data and any other information you provide to Redtail. You are responsible for all activity on your Redtail account, and for all charges incurred by your Redtail account. Accounts are void where prohibited by law. Redtail reserves the right to revoke or prohibit your account for any reason at any time, without notice, but, in particular, upon any violation of any of these Terms or the Privacy Policy.
Fees and Charges
Fees and any other charges for the use of the Site and Services are described on the Site. You agree to pay any and all prices and fees due for all Services purchased at this Site at the time you order the Services. All prices and fees are non-refundable unless otherwise expressly noted. Prices may change from time to time. If we change them, we will give you at least 30 days’ notice. If they do change, your continued use of the Site or Services after the change indicates your agreement with the new fees and charges after the effective date of the change. Any change to fees and other charges will not be applicable to the billing period in which the change occurs.
Payment for purchased Services shall be made by valid payment method (acceptable to Redtail) at the time of purchase at the fee set forth on the Site. Any recurring payments for Service shall be automatically charged to the credit card provided by you (and acceptable to Redtail) at the time of your purchase (with such payments being charged in advance, as applicable) each month or annually, as applicable and you hereby agree that Redtail is authorized to so charge the payment method on file.
In addition to recurring service fees, Redtail may charge set up fees and other one-time fees for any of the Services (“One-time Fees”). All One-time Fees shall be charged to the payment method provided by you (and acceptable to Redtail) at the time of your purchase, and you hereby agree that Redtail is authorized to so charge the payment method provided by you. Redtail, in its sole discretion, shall determine the prices it will charge for all One-time Fees.
If you believe that the billing or invoice is incorrect, you must contact us within 60 days of the billing period start date to be eligible to receive an adjustment or credit.
Your account is considered delinquent (in arrears) if full payment is not received by the billing period start date. If your account is delinquent for 30 days, we will deactivate your account. Deactivated accounts are not deleted – they are placed in storage and can be restored. We will notify you by email or phone if we decide to deactivate your account. If after your account has been deactivated, it stays delinquent and we don’t hear from you, we may terminate it at any time and without notice.
You and Redtail may terminate these Terms and your use of the Site at any time. If you terminate your use of the Site you must pay the fees applicable for the balance due on your account.
Ownership, Copyright and Trademarks
If any provision of these Terms shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from these Terms and shall not affect the validity and enforceability of any remaining provisions. Redtail may assign any or all of its rights hereunder to any party without your consent. You are not permitted to assign any of your rights or obligations hereunder without the prior written consent of Redtail, and any such attempted assignment will be void and unenforceable. These Terms constitute the entire agreement between you and Redtail regarding your use of the Site, and supersede all prior or contemporaneous communications whether electronic, oral or written between you and Redtail regarding your use of the Site. Redtail in its sole discretion may amend these Terms, and your use of the Site and Services after such amendment is posted on the Site will constitute acceptance of it by you. If any term in these Terms is declared unlawful, void or for any reason unenforceable by any court, then such term will be deemed severable from the remaining Terms and will not affect the validity and enforceability of such remaining terms. The Section headings in these Terms are for convenience only and must not be given any legal import.
This Site may contain typographical errors or inaccuracies and may not be complete or current. On the Site some products may appear larger or smaller than their actual size. Redtail therefore reserves the right to correct any errors, inaccuracies or omissions and to change or update information at any time without prior notice. Please note that such errors, inaccuracies or omissions may relate to pricing and availability, and we reserve the right to cancel or refuse to accept any order placed based on incorrect pricing or availability information. We apologize for any inconvenience.
All Sections representation or warranty you make in these Terms, shall survive indefinitely, or as permitted by law. 
</p>

            </PerfectScrollbar> 
            </Card>
              <a type="submit" size="sm" className="float-right btn btn-info btn-md" href="home" color="info"> I Accept, terms and Condition </a>
              <Button type="reset" size="sm" className="float-left" onClick={this.back}> I Decline</Button>           
              </Col>
          </Row>
          </div>
      }
  }
  export default AdvisorTerms;