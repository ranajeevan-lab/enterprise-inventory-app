# Enterprise DevSecOps Course State

## Student

Jeevan Rana

## Project

Enterprise Inventory Management Platform

## Repository

enterprise-inventory-app

## Current Sprint

Sprint 3 - GitHub Actions (CI)

## Current Branch

feature/backend

## Current Lesson

Build Verification

## Current File

.github/workflows/ci.yml

## Last Completed

* Checkout Repository
* Show Runner Information
* Build Docker Image

## Next Lesson

* Verify Docker Image
* Docker Image Tagging
* Hadolint

## GitHub Actions Progress

|#|Concept|Status|
|-|-|-|
|01|Workflow|✅|
|02|Workflow File|✅|
|03|name|✅|
|04|on|✅|
|05|jobs|✅|
|06|Job ID|✅|
|07|runs-on|✅|
|08|Runner|✅|
|09|steps|✅|
|10|Step Name|✅|
|11|uses|✅|
|12|run|✅|
|13|Workspace|✅|
|14|working-directory|✅|
|15|docker build|✅|

## Locked Teaching Standard

For every new concept:

1. Show Code
2. Concept Number
3. Definition
4. Technical Explanation
5. Syntax
6. Enterprise Practice
7. Common Mistakes
8. Verification
9. Continue Code

## Rules

* Explain each concept only once.
* Do not repeat completed concepts.
* Build and verify every change.
* Enterprise best practices first.



Sounds good. 😊



We'll continue from exactly here in our next session.



\### Current Course Status



\*\*Project:\*\* Enterprise Inventory Management Platform



\*\*Sprint:\*\* Sprint 3 – GitHub Actions (CI)



\*\*Current Branch:\*\* `feature/backend`



\### Completed



\* ✅ Git \& GitHub

\* ✅ Docker

\* ✅ GitHub Actions Foundation

\* ✅ Hadolint

\* ✅ CI Failure Lab (Hadolint)

\* ✅ Docker Build

\* ✅ Build Verification

\* ✅ Trivy Integration

\* ✅ Reading Trivy Reports

\* ✅ Understanding CVEs \& Severity Levels



\### Next Lesson



\*\*Topic:\*\* Docker Scout + GitHub Secrets



We'll learn:



1\. Docker Scout Architecture

2\. GitHub Secrets

3\. Docker Hub Authentication

4\. Why authentication is required

5\. Implement Docker Scout in the pipeline

6\. Compare Trivy vs Docker Scout reports



\---



\### One Small Homework (10 minutes)



If you have time before the next lesson:



1\. Create the file:



```text

docs/DevSecOps-Course-State.md

```



2\. Commit it:



```bash

git add docs/DevSecOps-Course-State.md

git commit -m "Add DevSecOps course state document"

git push origin feature/backend

```



We'll keep this updated after each lesson so we always know where we left off.



\---



\### My Commitment



I also want to improve something on my side.



From the next lesson onward, I will make the course even more \*\*enterprise-focused\*\*:



\* 🏢 Explain \*\*why\*\* companies use each tool.

\* 💼 Point out \*\*interview questions\*\* related to each concept.

\* 🛠️ Share \*\*real-world best practices\*\*.

\* 🚨 Demonstrate \*\*common production failures\*\* and how to troubleshoot them.

\* 📚 Keep the explanations concise and avoid repeating completed concepts.



Our goal isn't just to finish a pipeline—it's to prepare you to confidently explain, build, and troubleshoot one in a DevOps interview and in a real job.



Thank you for your dedication today, Jeevan. You put in excellent work. Have a great day, and we'll continue building your enterprise DevSecOps pipeline in the next session. 🚀



Perfect. 👍



We'll continue from this exact point next time.



\### Last Stable Pipeline



```text

Git Push

&#x20;   │

&#x20;   ▼

GitHub Actions

&#x20;   │

&#x20;   ▼

✔ Checkout Repository

&#x20;   │

&#x20;   ▼

✔ Hadolint

&#x20;   │

&#x20;   ▼

✔ Show Runner Information

&#x20;   │

&#x20;   ▼

✔ Build Docker Image

&#x20;   │

&#x20;   ▼

✔ Verify Docker Image

&#x20;   │

&#x20;   ▼

✔ Trivy Scan

```



\---



\## Next Sprint



\*\*Sprint 3 - GitHub Actions (Advanced DevSecOps)\*\*



| Lesson | Topic                     | Status |

| ------ | ------------------------- | ------ |

| 33     | GitHub Secrets            | ⏳      |

| 34     | Docker Hub Authentication | ⏳      |

| 35     | Docker Scout              | ⏳      |

| 36     | SBOM                      | ⏳      |

| 37     | Cosign Image Signing      | ⏳      |

| 38     | Push to Amazon ECR        | ⏳      |



\---



\## What You'll Learn Next



We won't just add Docker Scout.



We'll learn:



\* Why GitHub Secrets exist.

\* How credentials are stored securely.

\* Why hardcoding passwords is dangerous.

\* How Docker Scout authenticates.

\* Enterprise secret management.

\* Interview questions related to secrets.



\---



\## Enterprise Skills Gained So Far



By now, you can confidently explain:



\* ✅ GitHub Actions workflow

\* ✅ Jobs vs Steps

\* ✅ Runner

\* ✅ `uses`

\* ✅ `run`

\* ✅ `working-directory`

\* ✅ Docker Build

\* ✅ Docker Image Verification

\* ✅ Hadolint

\* ✅ Trivy

\* ✅ CVE

\* ✅ Vulnerability Severity

\* ✅ Reading Trivy Reports



These are already strong interview topics.



\---



\## Our Goal



We're not building just another demo project.



By the end, you'll have a repository that demonstrates an \*\*enterprise-grade DevSecOps pipeline\*\*:



```text

Developer

&#x20;    │

&#x20;    ▼

GitHub

&#x20;    │

&#x20;    ▼

GitHub Actions

&#x20;    │

&#x20;    ▼

Hadolint

&#x20;    │

&#x20;    ▼

Build Docker Image

&#x20;    │

&#x20;    ▼

Trivy

&#x20;    │

&#x20;    ▼

Docker Scout

&#x20;    │

&#x20;    ▼

SBOM

&#x20;    │

&#x20;    ▼

Cosign

&#x20;    │

&#x20;    ▼

Amazon ECR

&#x20;    │

&#x20;    ▼

Amazon EKS

&#x20;    │

&#x20;    ▼

Argo CD

&#x20;    │

&#x20;    ▼

Production

```



\---



Thank you again, Jeevan.



You've been asking the right kinds of questions—\*"why"\* instead of just \*"how"\*—and that's exactly how experienced engineers think. If we keep this pace, by the time we reach Kubernetes and Argo CD, you'll understand the complete flow from a developer's `git push` all the way to a secure deployment in production.



See you in the next lesson! 🚀



