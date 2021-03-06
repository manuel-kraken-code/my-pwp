# my-pwp
Deep Dive PWP

### Milestone 1 Feedback
Based on our earlier meeting about PWP Milestone 1, I don't see any of the refinements that we had discussed. Your Purpose, Audience, Goal and Persona all need more detail and clarity. What you have here is not sufficient.

- The **Purpose** should be the overall purpose of your PWP. Since it sounds like you plan to freelance, this should support your business goals. A word of caution: doing a PWP to drive sales to a prospective, rather than existing, freelance business is a difficult task since you will need to create the site to serve business goals. In effect, your business becomes your "client" in this project - and this makes it much more difficult. Perhaps a more general "professional portfolio" may be a better direction for you to take.

- The **Audience** could use more detail.

- The **Goal** you have here doesn't have anything to do with PWP. The Goal here should be the overarching goal of your PWP site, akin to a mission statement.

- The **Persona** here does not have enough detail, and it is not professionally written. It is important to have a very thorough understanding of your site's users so you can design a product for them. Have a look at the sample milestones for guidance (link below).

Please review the Milestone 1 Documentation, UX documentation, and Sample Milestones for guidance:
- https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/
- https://bootcamp-coders.cnm.edu/class-materials/user-experience/#personas-use-cases
- https://bootcamp-coders.cnm.edu/projects/personal/example/

Your project is set up ok, but there are a few technical points for you to review and fix. We are not building the PWP site in the /documentation directory **and** PWP is only a single  page - so remove the other pages. This is not the approach we'll be taking in this project.  Have a look at Edits &amp; Suggestions below.

Your Milestone 1 passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) (Submitted late, within one day of due date/time). Please submit revisions to the content and apply fixes before Wednesday 8:00am and I'll bump your grade to [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

#### Edits &amp; Suggestions
- Add `/vendor` to your .gitgignore
- DOCTYPE is mistyped - `html` is missing
- Be careful to indent your HTML properly.

#### Milestone 1 Revision Feedback
The purpose and goal are still not detailed enough, and are not relevant to this project. Please see the [Sample Milestones](https://bootcamp-coders.cnm.edu/projects/personal/example/) that I mentioned in the feedback above - that level of detail was the guide for Tier IV (grade A/professional) work - ideally what we were looking for here. The persona and audience are not detailed enough, and what you have here tells me next to nothing about these prospective clients of yours that you're building a site to engage with. There are also numerous spelling and grammatical errors here, which are very unprofessional.  TL; DR: this is not the quality of work you could hand to a client, coworker, or boss, and it's not accurate or detailed enough to provide you with a plan to base development on. If you plan to freelance, the ability to document, plan, and scope a project professionally is very important. That's the primary reason we assign these milestones to begin with - to highlight this process at a beginner level with very simple and basic requirements. In the "real world" of web and software development the requirements will go far beyond this.

The following technical issues listed above were not fixed:
- Your .gitignore is still missing `/vendor`
- Your DOCTYPE is still mistyped
- HTML indentation is still incorrect

Unfortunately, since the documentation you have here is insufficient and does not align with the project outline and the technical errors were not fixed I cannot increase the grade on this project. The grade stands at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Please begin Milestone 2a ASAP as you do not have time to complete any more work on this phase. Please bear in mind that successful completion of PWP is a graduation requirement.

### Milestone 2a Feedback
This is an alright start for your development. A bit more detail could be added to the Content Strategy so that it explains what each piece of the wireframe is. I see Welcome in the content strategy, but no Welcome in the wireframes. Based on what you have here, I think you'll find that your development process may not line up exactly with the wireframes so be prepared to adjust things as necessary. The reason I say this is because there's only a very general level of detail here. When you start putting things into a browser things may look a bit differently. Be careful not to lose time.

Add `/vendor` to your .gitignore - this has been missing since Milestone 1, and is in the feedback from before.

The built-in [Bootstrap Carousel](http://getbootstrap.com/docs/4.1/components/carousel/) should be sufficient for your portfolio carousel. Give it a try.

[FontAwesome](https://fontawesome.com/) is a good quality free library for including iconography. Try this out for your footer icons.

Slack usernames are team-based - so it's not something that would be useful to the general public to contact you. Think about removing it from the footer for that reason.

A simple site like yours can look polished and professional - consistency in your design, good use of colors, and good quality images make ALL the difference. Keep things simple and well lined up. Things are a little bit skewed and misaligned in the wireframes. Watch the mispellings - clients and employers notice this. Going forward I challenge you to take these deliverables to the next level in quality.

Begin development after you can complete the Bootstrap Challenge. Keep things simple. Your Milestone 2a passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

**We'll be building PWP in a file named index.php inside of /public_html**. Please note that no site files should live outside of the /public_html directory. Please use an organized and standards-compliant directory structure to house all images, JavaScript, CSS, etc. We are done with the /documentation directory for now!

#### Edits &amp; Suggestions
- **Add `/vendor` to your .gitignore**.

### Milestone 2b Feedback
Nice work so far - but you've still got a way to go. Your Milestone 2b passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Meeting notes left via Slack.

### PWP Final Feedback
Nice work on creating a simple but stylish PWP. There is plenly of room to expand upon what you've done here - so continue to practice your front-end skills and challenge yourself.

*Code Base*: The following issues were found in your code. Errors can also be found by using https://validator.w3.org.
- DOCTYPE declaration `html` is missing
- Comment syntax is non-standard, and there are nested comments. This can cause problems. Stick to: `<!-- COMMENT HERE -->`
- There is dead/commented-out code throughout the document. This is fine for development, but should be removed when you go live.
- Evidence of unclosed or improperly closed/nested elements
- I also see some copy/pasted css from my form demo that's not being used at all (CSS lines 131 - 150). Why'd you include this if you don't need it?

*Git Commits*: Ok - try and be more regular in your commit/push habits in the future. Also take care to leave useful commit messages.

*Mobile-First Responsiveness*: I've tested your page using devtools, Chrome on Linux, and Chrome & Firefox on Android. Your layout and design work well on the platforms tested - nice work.

*Design, Content, &amp; Overall Presentation*: Nice work on design - the use of imagery and color really make your page stand out. There is plenty of room for added content... there's not much here to read or explore, but the graphics still draw the eye in. It looks like the three images you have in your slider are placeholders for real content. This makes your page feel unfinished, and that's not very  professional once a site goes live. It's best to remove that section until you have some real content in place. The photos you've used look great, and you've got an eye for contrast and color. Keep up the good work - and continue to challenge yourself with UI design.

*Contact Form*: Your contact form appears to be working correctly from my end - check and see if you got my test message.

Your PWP passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your cumulative PWP score including all Milestones is 26/40 points (65%). Please bear in mind that 20/40 is considered passing with a "C".

- Milestone 1 - 20%: Tier I 10(0.2) = 2
- Milestone 2a - 20%: Tier III 30(0.2) = 6
- Milestone 2b - 10%: Tier III 30(0.1) = 3
- Milestone 3 - 50%: Tier III 30(0.5) = 15

#### Suggestions
- We didn't discuss favicons, but you might want to consider adding one. Have a look at this tool which helps render multiple versions for cross-platform  support: https://realfavicongenerator.net/
