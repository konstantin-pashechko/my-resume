<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="image/my-photo.jpg" />
	<meta property="og:site_name" content="Microsoft">
	<meta property="og:title" content="Resume">
	<meta name="twitter:image" content="https://dotnet.microsoft.com/images/redesign/social/larg.png">
	<meta property="og:description" content="ASP.NET is a free web framework for building great Web sites and Web applications using HTML, CSS and JavaScript." />

	<link rel="stylesheet" href="/view/template/css/style.css">
	<title><?= $aboutMe['title'] ?></title>
</head>
<body>

	<div class="main-container">

		<div class="main-content">
			<div data-row="<?= $aboutMe['id'] ?>" data-table="about-me" class="about-me">
				
				<h2 data-id="about-me-profession" class="about-me-profession"><?= $aboutMe['about-me-profession'] ?></h2>
				<h1 data-id="about-me-name" class="about-me-name"><?= $aboutMe['about-me-name'] ?></h1>
				<p data-id="about-me-description" class="about-me-description"><?= $aboutMe['about-me-description'] ?></p>
			</div>
			<div data-table="my-projects" class="my-projects">
				<h3 class="main-content-title">Projects</h3>
				<ol class="project-list">
					<?php foreach($myProjects as $value): ?>
						<li data-row="<?= $value['id'] ?>" class="project-list-item">
							<span class="project-list-text">
								<span data-id="tech"><?= $value['tech']; ?></span>
								<a data-id="link" class="project-list-lin" href="<?= $value['link'] ?>"><?= $value['link'] ?></a>
								
							</span>
						</li>
					<?php endforeach; ?>
				</ol>
			</div>
			<div data-table="work-experience" class="work-experience">
				<h3 class="main-content-title">Work Experience</h3>
				<?php foreach($workExperience as $value): ?>
					<div data-row="<?= $value['id'] ?>" class="work-company-block">
						<h4 class="work-experience-position"><span data-id="position"><?= $value['position'] ?></span> <span data-id="company" class="work-company-name"><?= $value['company'] ?></span></h4>
						<p data-id="period" class="work-experience-period"><?= $value['period'] ?></p>
						<ul class="duties-list">
							<?php $i=1; while ($value["dutie-item$i"]): ?>
							<li class="dutie-item"><?= $value["dutie-item$i"]; $i++; ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endforeach; ?>			
		</div>
		<div class="my-education" data-table="education">
			<h3 class="main-content-title">Education</h3>
			<?php foreach($education as $value): ?>
				<div data-row="<?= $value['id']; ?>">
					<h4 data-id="institut" class="education-institut"><?= $value['institut'] ?></h4>
					<h4 data-id="speciality" class="education-speciality"><?= $value['speciality'] ?></h4>
					<p data-id="period" class="education-period"><?= $value['period'] ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<aside class="sidebar">
		<img class="my-photo" src="/view/img/<?= $image['photo'] ?>" alt="my-photo">

		<div data-row="<?= $contact['id'] ?>" data-table="contact" class="contacts">
			<h3 class="sidebar-title">Contacts</h3>
			<div>
				<span class="contact-type">C:</span>
				<a data-id="phone" class="contact-link" href="tel:<?= $contact['phone'] ?>"><?= $contact['phone'] ?></a>
			</div>
			<div>
				<span class="contact-type">E:</span>
				<a data-id="mail" class="contact-link" href="mailto:<?= $contact['mail'] ?>"><?= $contact['mail'] ?></a>
			</div>
		</div>

		<div class="tech-skills" data-table="tech-skill">
			<h3 class="sidebar-title">Tech Skills</h3>

			<ul class="tech-skills-list">
				<?php foreach($techSkill as $value): ?>
					<li data-row="<?= $value['id'] ?>" data-id="skill" class="tech-skills-item"><span class="tech-skills-item-text"><?= $value['skill'] ?></span></li>
				<?php endforeach; ?>
			</ul>
		</div>

		<div class="soft-skills" data-table="soft-skill">
			<h3 class="sidebar-title">Soft Skills</h3>
			<ul class="soft-skills-list">
				<?php foreach($softSkill as $value): ?>
					<li data-row="<?= $value['id'] ?>" data-id="skill" class="soft-skills-item"><span class="soft-skills-item-text"><?= $value['skill'] ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</aside>
	</div>
	
	<?php if($_SESSION['state']=='edit'): ?>
		<script src="/view/template/js/edit.js"></script>
		<?php echo $_SESSION['state'] ?>
	<?php endif; ?>
	<script src="/view/template/js/app.js"></script>
</body>
</html>